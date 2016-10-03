<?php

namespace App\Http\Controllers\Backend;

use App\Article;
use App\Category;
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
        return view('backend.article.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::pluck('name', 'id')->all();
//        return $categories[1];
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
        //如果有文件存在,则处理文件
        if ($file = $request->file('picture')) {

            //设置文件名
            $name = $file->getClientOriginalName();

            $input['picture'] = $name;

            //移动图片,如果无法移动,就把文件名编码后再移动
            try {

                $file->move('images/articles/', $name);

            } catch (FileException $e) {

                $encodedName = iconv('utf-8', 'gbk', $name);

                $file->move('images/articles/', $encodedName);

            }
        }

        Article::create($input);

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
        //
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
