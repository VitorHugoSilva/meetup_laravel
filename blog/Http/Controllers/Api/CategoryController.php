<?php

namespace Blog\Http\Controllers\Api;

use App\Http\Controllers\BasicApiCrudController;
use Blog\Models\Category;

class CategoryController extends BasicApiCrudController
{
    private $rules = [
            'name' => 'required|string|max:255',
            'description' => 'required'
    ];

    protected function model()
    {
        return Category::class;
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
