<?php

namespace Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'sub_title',
        'content',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(\Blog\Models\Category::class);
    }
}
