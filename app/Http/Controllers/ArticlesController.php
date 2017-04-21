<?php

namespace App\Http\Controllers;
use App\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index(){
        $articles = Articles::all();
        return view("articles")->with("articles", $articles);
    }

    public function create(){
        return view("create");
    }

    public function store(Request $request){
        $dulieu_tu_input = $request->all();
        $articles = new Articles;
        $articles->name = $dulieu_tu_input["name"];
        $articles->author = $dulieu_tu_input["author"];
        $articles->save();
        return redirect('articles');
    }
}
