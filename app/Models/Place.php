<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable =[
        'name',
        'id',
        ];
        
        
    public function recruitments()
    {
        return $this->hasMany(Recruitment::class);
    }
    
    
    
    
    
    
}
