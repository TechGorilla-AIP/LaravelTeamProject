<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Type;

class RestController extends Controller
{
    //RESTful controller
	//Ten latest posts from users.
    public function articleList()
    {
    	$articles=DB::table('articles')->orderBy('id', 'desc')->limit(10)->get();
    	$list=array();
    	foreach($articles as $k=>$article) {
    		$list[$k]['id']=$article->id;
    		$list[$k]['title']=$article->title;
    		$list[$k]['body']=$article->body;
    		$list[$k]['type_name']=Type::find($article->typeId)->name;
    		$list[$k]['created_at']=$article->created_at;
    	}
    	echo json_encode($list);
    }
    
    //Ten latest cate
    public function typeList()
    {
    	$types=DB::table('types')->orderBy('id', 'desc')->limit(10)->get();
    	$list=array();
    	foreach($types as $k=>$type) {
    		$list[$k]['name']=$type->name;
    		$list[$k]['description']=$type->description;
    		$list[$k]['created_at']=$type->created_at;
    	}
    	echo json_encode($list);
    }
    
    //Ten latest announcements
    public function announcementList()
    {
    	$announcemens=DB::table('announcements')->orderBy('id', 'desc')->limit(10)->get();
    	$list=array();
    	foreach($announcemens as $k=>$announcemen) {
    		$list[$k]['id']=$announcemen->id;
    		$list[$k]['title']=$announcemen->title;
    		$list[$k]['body']=$announcemen->body;
    		$list[$k]['created_at']=$announcemen->created_at;
    	}
    	echo json_encode($list);
    }
}
// last updated by fulun 1/10 2017