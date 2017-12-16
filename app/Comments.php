<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Post;
use \App\User;

class Comments extends Model
{

    public function post()
    {
        return $this->belongsTo(Post::Class);
    }

    public function user()
    {
        return $this->belongsTo(User::Class);
    }

}
