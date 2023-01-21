<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'title',
        'comment',
        'image_id',
        ];
    
    
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    public function images()
    {
        return $this->hasManyTo(Image::class);
    }
    
     public function comments()
    {
        return $this->hasManyTo(Comment::class);
    }
}
