<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function view()
    {
        $artigos = Article::with('category')->orderBy('id', 'desc')->limit(3)->get();

        $search = request('search');

        if ($search) {
            $artigos = Article::with('category')->where([
                ['name', 'like', '%' . $search . '%']
            ])->get();
        }

        return view('welcome', ['artigos' => $artigos, 'search' => $search]);
    }
}
