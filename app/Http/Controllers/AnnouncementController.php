<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
 

class AnnouncementController extends Controller
{
    public function show($id) 
    {
    	$article=Announcement::find($id);
    	
    	return view('show',compact('article'));
    }
}
