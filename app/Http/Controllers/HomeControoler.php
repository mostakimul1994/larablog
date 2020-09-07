<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class HomeControoler extends Controller
{
    public function index(){
    	$data['featured_posts'] = Post::where('is_featured',1)->where('status','published')->get();
    	return view('front.index',$data);
    }
}
