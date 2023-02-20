<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnowboardStyle extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'snowboard_style_name',
        ];
        
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
