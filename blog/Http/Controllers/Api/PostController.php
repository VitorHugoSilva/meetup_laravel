<?php

namespace Blog\Http\Controllers\Api;

use App\Http\Controllers\BasicApiCrudController;
use Blog\Models\Post;

class PostController extends BasicApiCrudController
{
    private $rules = [
        'title' => 'required|string|max:255',
        'sub_title' => 'required|string|max:255',
        'content' => 'required',
        'category_id' => 'required|integer|exists:categories,id',
    ];
    protected function model()
    {
        return Post::class;
    }

    protected function ruleStore()
    {
        return $this->rules;
    }

    protected function ruleUpdate()
    {
        return $this->rules;
    }
}
