<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportKind extends Model
{
    use HasFactory;
    
    protected $fillable=[
       'sport_kind_name',
        ];
        
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    
}
