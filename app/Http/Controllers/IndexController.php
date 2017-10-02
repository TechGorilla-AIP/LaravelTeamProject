<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Announcement;

use App\Article;
use App\Type;

class IndexController extends Controller
{
	
    public function index()
    {
        return view('index');
    }
    
    
    public function tour()
    {
    	return view('tour');
    }
    
    
    public function about()
    {
    	return view('about');
    }
    
    
    public function buyPrice()
    {
    	return view('buyPrice');
    }
    
    //admin article
    public function work()
    {
    	return view('listAnnouncement')->withArticles(DB::table('announcements')->orderBy('id', 'desc')->paginate(8));
    }
    
    //people share
    public function share()
    {
    	return view('list')->withArticles(DB::table('articles')->orderBy('id', 'desc')->paginate(8));
    }
    
    public function detail()
    {
    	return view('detail');
    }
    
}
