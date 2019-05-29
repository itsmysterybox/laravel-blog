<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
    	return view('index')
    			->with('categories', Category::take(5)->get())
    			->with('first_post', Post::orderBy('created_at', 'desc')->first())
    			->with('second_third_posts', Post::orderBy('created_at', 'desc')->skip(1)->take(2)->get())
    			->with('latest_categories', Category::orderBy('updated_at', 'desc')->take(2)->get())
    			->with('settings', Setting::first());
    }

    public function singlePost($slug) {
    	$post = Post::where('slug', $slug)->first();

    	return view('single')->with('post', $post)
    						->with('categories', Category::take(5)->get())
    						->with('settings', Setting::first());
    }
}
