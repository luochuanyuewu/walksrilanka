<?php

namespace App\Http\Controllers\Backend;

use App\Picture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'picture' => 'bail|required|image|dimensions:min_width=400,min_height=300,max_width=800,max_height=600|max:512',
            'article_id' => 'required',
        ]);
        #region 处理缩略图
        if ($file_picture = $request->file('picture')) {
            $name_picture = time() . $file_picture->getClientOriginalName();

            try {
                $file_picture->move('images/articles', $name_picture);
            } catch (FileException $e) {
                $encodedName = iconv('utf-8', 'gbk', $name_picture);
                $file_picture->move('images/articles', $encodedName);
            }
            Picture::create(['name' => $name_picture, 'article_id' => $request->article_id]);

            $original_picture_path = public_path() . $name_picture;
            //如果文件存在就删除
            if (file_exists($original_picture_path))
                Session::flash('uploaded_picture', 'Uploaded picture successfull!');
            return redirect(route('article.edit', ['id' => $request->article_id]));
        }
        #endregion

        return redirect(route('article.edit', ['id' => $request->article_id]));

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $picture = Picture::find($id);
        $article = $picture->article;
        $original_picture_path = public_path() . $picture->name;
        //如果文件存在就删除
        if (file_exists($original_picture_path)) unlink($original_picture_path);
        $picture->delete();
        Session::flash('deleted_picture', 'Deleted picture successfull!');

        return redirect(route('article.edit', ['id' => $article->id]));

    }
}
