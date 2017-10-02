<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use App\Article;
use App\Type;

class HomeController extends Controller
{
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$user_id=Auth::id();
        return view('article.index')->withArticles(DB::table('articles')->where('user_id','=',$user_id)->orderBy('id', 'desc')->paginate(8));
    }
    
     /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('article.create')->withTypes(Type::all());
    }
    
    
    //add 
    public function store(Request $request)
    {
    	$article = new Article();
    	$article->title = $request->input('title');
    	$article->body = $request->input('body');
    	$article->typeId = $request->input('typeId');
    	$article->user_id=Auth::id();
    	
    	if ($article->save()) {
    		return redirect('/home');
    	} else {
    		return back()->withInput()->withErrors('add failed');
    	}
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) 
    {
    	$article=Article::find($id);
    	$types=Type::all();
    	
    	return view('article.edit',compact('article','types'));
    }
    
    
    /**
     *  update
     */
    public function update(Request $request,$id)
    {
    	$article = Article::find($id);
    	$article->title = $request->input('title');
    	$article->body = $request->input('body');
    	$article->typeId = $request->input('typeId');
    
    	if ($article->save()) {
    		return redirect('/home');
    	} else {
    		return back()->withInput()->withErrors('add failed');
    	}
    }
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete(Request $request)
    {
    	$res=0;
    	$id=$request->input('id');
    	
    	$article = Article::find($id);
    	$result=$article->delete();
     
    	$result==true && $res=1;
    	
    	return  $res;
    }
    
}
