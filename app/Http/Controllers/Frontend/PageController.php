<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use App\Category;
use App\Contacter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //参考Category_Seeder


    //列出所有的套餐的Page,
    public function PackageIndex()
    {
        $page_title = '旅游套餐';
        $page_description = '在这里我们提供预先设计好的旅游套餐供您选择';
        $articles = Category::find(1)->articles;
        return view('frontend.pages.index', compact('page_title', 'page_description', 'articles'));
    }

    //列出所有的地方的Page,
    public function PlaceIndex()
    {
        $page_title = '流行的目的地';
        $page_description = '您可以查看所有您感兴趣的地方';
        $articles = Category::find(2)->articles;
        return view('frontend.pages.index', compact('page_title', 'page_description', 'articles'));
    }

    //列出所有的项目的Page,
    public function ActivityIndex()
    {
        $page_title = '有趣的项目活动';
        $page_description = '您可以查看所有您感兴趣的项目与活动';
        $articles = Category::find(3)->articles;
        return view('frontend.pages.index', compact('page_title', 'page_description', 'articles'));
    }

    //列出所有的饮食的Page,
    public function FoodIndex()
    {
        $page_title = '斯里兰卡的美食';
        $page_description = '您可以查看斯里兰卡的相关美食';
        $articles = Category::find(4)->articles;
        return view('frontend.pages.index', compact('page_title', 'page_description', 'articles'));
    }


    //列出所有的信息的Page,
    public function InfoIndex()
    {
        $page_title = '酒店信息';
        $page_description = '您可以查看所有酒店相关的信息';
        $articles = Category::find(5)->articles;
        return view('frontend.pages.index', compact('page_title', 'page_description', 'articles'));
    }


    //显示单一的一个文章
    public function ArticleShow($id)
    {
        $article = Article::find($id);

        if(!$article)
            abort(404);

        $pictures = $article->pictures;
        return view('frontend.pages.show', compact('article', 'pictures'));
    }

    public function ContacterIndex($PackageID = null)
    {
        $contacters = Contacter::all();
        $packages = Category::find(1)->articles()->pluck('title');
        $packageName = null;
        if ($PackageID) {
            $package = Article::find($PackageID);
            if ($package and $package->category_id == 1)
                $packageName = $package->title;
        }

        return view('frontend.contacter.index', compact('contacters', 'packages', 'packageName'));
    }
}
