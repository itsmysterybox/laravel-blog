<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Category;
use App\Post;
use App\Tag;
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

    	$next_id = Post::where('id', '>', $post->id)->min('id');
    	$prev_id = Post::where('id', '<', $post->id)->max('id');

    	return view('single')->with('post', $post)
    						->with('categories', Category::take(5)->get())
    						->with('settings', Setting::first())
    						->with('next', Post::find($next_id))
    						->with('prev', Post::find($prev_id))
                            ->with('tags', Tag::all());
    }

    public function category($id) {
        $category = Category::find($id);

        return view('category')->with('category', $category)
                                ->with('categories', Category::take(5)->get())
                                ->with('settings', Setting::first());
    }

    public function tag($id) {
        $tag = Tag::find($id);

        return view('tag')->with('tag', $tag)
                            ->with('categories', Category::take(5)->get())
                            ->with('settings', Setting::first());
    }

    public function results() {
        $posts = Post::where('title', 'like', '%' . request('query') . '%')->get();

        return view('results')->with('posts', $posts)
                                ->with('query', request('query'))
                                ->with('categories', Category::take(5)->get())
                                ->with('settings', Setting::first());
    }
}
