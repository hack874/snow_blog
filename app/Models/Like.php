<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    
    public function post()
    {
        return $this->belongsTo(Post::class); //いいね目線
    }
    public function user()
    {
        return $this->belongTo(User::class);
    }
    
}

