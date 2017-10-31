<?php

namespace App;
use App\User;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'author', 'body'];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
