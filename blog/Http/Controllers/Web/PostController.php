<?php

namespace Blog\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Blog\Models\Category;
use Blog\Models\Post;


class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function fromCategory(Category $category)
    {
        $categories = Category::all();
        $posts = $category->posts;

        return view('posts.from_category', compact('category', 'categories', 'posts'));
    }
}
