<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$year = Carbon::now()->year;
        $posts = Post::paginate(2);
        $categories = Category::all();
        return view('front/home', compact('posts', 'categories'));
    }

    public function post($slug){
        $post = Post::where('slug', $slug)->first();
        $comments = $post->comments()->whereIsActive(1)->get();
         $categories = Category::all();

        return view('post', compact('post', 'comments', 'categories'));
    }
}
