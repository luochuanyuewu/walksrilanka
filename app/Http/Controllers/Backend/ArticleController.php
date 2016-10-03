<?php

namespace App\Http\Controllers\Backend;

use App\Article;
use App\Category;
use App\Picture;
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
        return view('backend.article.index',compact('articles','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::pluck('name', 'id')->all();
        return view('backend.article.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
//        return $input;
        //如果有文件存在,则处理文件
        if ($file = $request->file('picture_id')) {

            $name = time() . $file->getClientOriginalName();
            //移动图片,如果无法移动,就把文件名编码后再移动
            try {
                $file->move('images/articles', $name);
            } catch (FileException $e) {
                $encodedName = iconv('utf-8', 'gbk', $name);
                $file->move('images/articles', $encodedName);
            }
            $picture = Picture::create(['name' => $name,'category_id'=>0]);
            $input['picture_id'] = $picture->id;

            $article = Article::create($input);
            $picture->update(['article_id'=>$article->id]);
        }

        //flash类型的Session只会出现一次就失效
        Session::flash('created_article', 'Create article successfull!');

        return redirect(route('article.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $articles = Article::where('category_id',$id)->get();
        return view('backend.article.index',compact('articles','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Article::find($id);
        $categories = Category::lists('name', 'id')->all();
//        return $note;
        return view('notes.edit', compact('note', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
