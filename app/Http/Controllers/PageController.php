<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Contacter;
use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //参考Category_Seeder


    //列出所有的套餐的Page,
    public function PackageIndex()
    {
        $page_title = '旅游套餐';
        $page_description = '在这里我们提供预先准备好的旅游套餐供你选择';
        $articles = Category::find(1)->articles;
        return view('frontend.pages.index', compact('page_title', 'page_description', 'articles'));
    }

    //列出所有的地方的Page,
    public function PlaceIndex()
    {
        $page_title = '流行的目的地';
        $page_description = '你可以查阅所有您感兴趣的地方';
        $articles = Category::find(2)->articles;
        return view('frontend.pages.index', compact('page_title', 'page_description', 'articles'));
    }

    //列出所有的项目的Page,
    public function ActivityIndex()
    {
        $page_title = '有趣的活动';
        $page_description = '你可以查阅所有您感兴趣的活动';
        $articles = Category::find(3)->articles;
        return view('frontend.pages.index', compact('page_title', 'page_description', 'articles'));
    }

    //列出所有的饮食的Page,
    public function FoodIndex()
    {
        $page_title = '美食';
        $page_description = '你可以查阅所有美食';
        $articles = Category::find(4)->articles;
        return view('frontend.pages.index', compact('page_title', 'page_description', 'articles'));
    }


    //列出所有的信息的Page,
    public function InfoIndex()
    {
        $page_title = '旅游信息';
        $page_description = '你可以查阅所有旅游相关的信息';
        $articles = Category::find(5)->articles;
        return view('frontend.pages.index', compact('page_title', 'page_description', 'articles'));
    }


    //显示单一的一个文章
    public function ArticlesShow($id)
    {
        $article = Article::find($id);
        return view('frontend.pages.show',compact('article'));
    }

    public function ContacterIndex()
    {
        $contacters = Contacter::all();
        return view('frontend.contacter.index',compact('contacters'));
    }
}
