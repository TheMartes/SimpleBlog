<?php

namespace App;
use App\User;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'author', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::Class);
    }
}
