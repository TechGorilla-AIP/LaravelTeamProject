<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Type;


class ArticleController extends Controller
{
    public function show($id) 
    {
    	$article=Article::find($id);
    	$types=Type::all();
    	
    	return view('show',compact('article','types'));
    }
}
