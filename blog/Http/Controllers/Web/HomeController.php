<?php

namespace Blog\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Blog\Models\Category;
use Blog\Models\Post;


class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::orderBy('updated_at')->paginate(6);
        return view('home.index', compact('categories', 'posts'));
    }
}
