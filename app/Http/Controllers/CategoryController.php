<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function view()
    {
        $categorias = Category::all();

        return view('category', ['categorias' => $categorias]);
    }

    public function articlesbycategory($id)
    {

        $categoria = Category::findOrFail($id)->name;
        $articles = Article::where('category_id', '=', $id)->get();

        return view('articlesbycategory', ['articles' => $articles, 'categoria' => $categoria]);
    }

    public function store(Request $request)
    {
        $name = $request->name;

        $verifyifalreadyexists = Category::where('name', '=', strtolower($request->name))->first();
        if ($verifyifalreadyexists) {
            return back()->with('msg', ('Categoria já cadastrada!'));
        }

        $verifyifisempty = ($request->name == null);
        if ($verifyifisempty) {
            return back()->with('msg', ('Por Favor, escreva uma categoria!'));
        }

        $category = new Category();
        $category->name = $name;

        $category->save();

        return back();
    }
}
