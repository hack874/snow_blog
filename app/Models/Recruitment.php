<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'comment',
        'user_id',
        'place',
        'date',
        ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function user() //投稿から見たらユーザーは一人に決まるからuser
    {
        return $this->belongsTo(User::class);
    }
}

