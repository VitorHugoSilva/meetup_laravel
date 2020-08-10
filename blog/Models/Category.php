<?php

namespace Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function posts()
    {
        return $this->hasMany(\Blog\Models\Post::class);
    }
}
