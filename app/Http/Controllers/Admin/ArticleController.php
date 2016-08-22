<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function create(){
        return view('admin/create');
    }

    public function index(){
        return view('admin/article')->withArticles(Article::all());
    }

    public function edit($id){
        return view('admin/edit')->withArticle(Article::find($id));
    }

    public function store(Request $request){
        $article = new Article();
        $article->title = $request->get('title');
        $article->body = $request->get('body');
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect('/admin/article');
    }

    public function update(Request $request,$id){
        $article = Article::find($id);
        $article->title = $request->get('title');
        $article->body = $request->get('body');
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect('/admin/article');
    }
}
