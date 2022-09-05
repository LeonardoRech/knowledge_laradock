<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function view()
    {
        $cats = Category::all();

        return view('article', ['cats' => $cats]);
    }

    public function viewarticle($id)
    {
        $article = Article::findOrFail($id);

        return view('viewarticle', ['article' => $article]);
    }

    public function allarticles()
    {
        $articles = Article::all();

        return view('allarticles', ['articles' => $articles]);
    }

    public function store(Request $request)
    {

        if (empty($request->all())) {
            return back()->with('msg', ('Preencha todos os campos!'));
        }

        $article = new Article();
        $article->name = $request->name;
        $article->content = $request->content;
        $article->category_id = $request->category_id;

        $article->save();

        return back();

        return redirect('/');
    }

    public function destroyarticle($id)
    {
        Article::findOrFail($id)->delete();

        return back();
    }

    public function editarticle($id)
    {
        $article = Article::findOrFail($id);
        $catarticle = Category::where('id', '=', $article->category_id)->get();
        $cats = Category::all();

        return view('editarticle', ['article' => $article, 'cats' => $cats, 'catarticle' => $catarticle]);
    }

    public function updatearticle(Request $request)
    {
        Article::findOrFail($request->id)->update($request->all());

        return back();
    }
}
