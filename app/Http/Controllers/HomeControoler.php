<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;

use Illuminate\Http\Request;

class HomeControoler extends Controller
{
	public function index(){
		$data['featured_posts'] = Post::with(['category','author'])->published()->where('is_featured',1)->limit(4)->get();
		$data['latest_posts'] = Post::with(['category','author'])->published()->orderBy('id','desc')->paginate(6);
		$data['popular_post'] = Post::with(['category','author'])->published()->orderBy('total_hit','desc')->limit(4)->get();
		$data['categories'] = Category::all();
		return view('front.index',$data);
	}

	public function details($id){
		$data['popular_post'] = Post::with(['category','author'])->published()->orderBy('total_hit','desc')->limit(4)->get();
		$data['categories'] = Category::all();

		$post = Post::with(['category','author'])->findOrFail($id);
		$post->increment('total_hit');
		$data['post'] = $post;
		$data['related_posts'] = Post::with(['category','author'])->published()->where('category_id',$post->category_id)->orderBy('id','desc')->limit(3)->get();
		return view('front.details',$data);
	}
	public function about(){
		return view('front.about');
	}
}
