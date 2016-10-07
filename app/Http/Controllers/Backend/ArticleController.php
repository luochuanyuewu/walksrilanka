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

        $input = $request->except('thumbnail');

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
        $articles = Article::where('category_id', $id)->latest()->get();
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
        $pictures = $article->pictures;
        $categories = Category::pluck('name', 'id')->all();
        return view('backend.article.edit', compact('article', 'categories', 'pictures'));
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
        $this->validate($request, [
            'thumbnail' => 'image|dimensions:min_width=400,min_height=300,max_width=800,max_height=600|max:512',
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $input = $request->except('thumbnail');

        $article = Article::find($id);
        $article->update($input);

//        return $article;
        #region 处理缩略图
        if ($file_thumbnail = $request->file('thumbnail') and $article->thumbnail->name) {

            //获取原缩略图文件路径
            $original_thumbnail_path = public_path() . $article->thumbnail->name;
            //如果文件存在就删除
            if (file_exists($original_thumbnail_path)) unlink($original_thumbnail_path);
            //生成新缩略图的名字
            $name_thumbnail = time() . $file_thumbnail->getClientOriginalName();

            $article->thumbnail->update(['name' => $name_thumbnail]);

            try {
                $file_thumbnail->move('images/thumbnails', $name_thumbnail);
            } catch (FileException $e) {
                $encodedName = iconv('utf-8', 'gbk', $name_thumbnail);
                $file_thumbnail->move('images/thumbnails', $encodedName);
            }
        }
        #endregion


        //flash类型的Session只会出现一次就失效
        Session::flash('updated_article', 'Updated article successfull!');

        return redirect(route('article.edit', ['id' => $id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        #region 删除缩略图
        if ($article->thumbnail) {
            //获取原缩略图文件路径
            $original_thumbnail_path = public_path() . $article->thumbnail->name;
            //如果文件存在就删除
            if (file_exists($original_thumbnail_path)) unlink($original_thumbnail_path);
            $article->thumbnail->delete();
        }
        #endregion
        #region 删除图片
        if ($pictures = $article->pictures)
            foreach ($pictures as $picture) {
                //获取原缩略图文件路径
                $original_picture_path = public_path() . $picture->name;
                //如果文件存在就删除
                if (file_exists($original_picture_path)) unlink($original_picture_path);
                $picture->delete();
            }
        #endregion
        $article->delete();

        Session::flash('deleted_article', 'Deleted article successfull!');

        return redirect(route('article.index'));


    }
}
