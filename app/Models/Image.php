<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $fillable = [ 
        'post_id',
        'path'
        ];
    
    public function posts(){
        
     return $this->belongsTo(User::class);
    }
}

