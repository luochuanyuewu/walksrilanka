<?php

namespace App\Http\Controllers\Backend;

use App\Article;
use App\Category;
use App\Picture;
use App\Thumbnail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $articles = Article::latest()->get();
        return view('backend.article.index', compact('articles', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::pluck('name', 'id')->all();
        return view('backend.article.create', compact('categories'));

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
            'thumbnail' => 'bail|required|image|dimensions:min_width=400,min_height=300,max_width=800,max_height=600|max:512',
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $input = $request->except('pictures', 'thumbnail');

        $article = Article::create($input);

//        return $article;
        #region 处理缩略图
        if ($file_thumbnail = $request->file('thumbnail')) {
            $name_thumbnail = time() . $file_thumbnail->getClientOriginalName();

            try {
                $file_thumbnail->move('images/thumbnails', $name_thumbnail);
            } catch (FileException $e) {
                $encodedName = iconv('utf-8', 'gbk', $name_thumbnail);
                $file_thumbnail->move('images/thumbnails', $encodedName);
            }
            Thumbnail::create(['name' => $name_thumbnail, 'article_id' => $article->id]);
        }
        #endregion

        #region 处理图片
//        if ($files_picture = $request->file('pictures')) {
//            // Making counting of uploaded images
//            $file_count = count($files_picture);
//            // start count how many uploaded
//            $uploadcount = 0;
//            foreach ($files_picture as $file_picture) {
//                $rules = ['file' => 'bail|required|image|dimensions:min_width=400,min_height=300,max_width=800,max_height=600|max:512'];
//                $validator = Validator::make(['file' => $file_picture], $rules);
//                if ($validator->passes()) {
//                    $destinationPath = 'images/articles';
//                    $filename = time() . $file_picture->getClientOriginalName();
//                    $file_picture->move($destinationPath, $filename);
//                    Picture::create(['name'=>$filename,'article_id'=>$article->id]);
//                    $uploadcount++;
//                }
//            }
//            if ($uploadcount == $file_count) {
//                Session::flash('uploaded_pictures', 'Upload multiple pictures successfully');
//            } else {
//
//                return redirect(route('article.index'))->withInput()->withErrors($validator);
//            }
//        }
        #endregion

        //flash类型的Session只会出现一次就失效
        Session::flash('created_article', 'Create article successfull!');

        return redirect(route('article.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $articles = Article::where('category_id', $id)->get();
        return view('backend.article.index', compact('articles', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $categories = Category::pluck('name', 'id')->all();
        return view('backend.article.edit', compact('article', 'categories'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
