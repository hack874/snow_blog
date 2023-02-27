<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'gender',
        'age',
        'email',
        'password',
        'favorite_place',
        'introduction',
        'profile_image',
        'like',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function posts()   
   {
    return $this->hasMany(Post::class);  
   }
   
   public function sportKinds()
   {
       return $this->belongsToMany(SportKind::class);
   }
   
   public function snowboardStyles()
   {
       return $this->belongsToMany(SnowboardStyle::class);
   }
   
   public function recruitments()
   {
       return $this->hasMany(Recruitment::class);
   }
     
    public function comments()   
   {
    return $this->hasMany(Comment::class);  
   }
     //多対多のリレーション
   public function likes()
    {
        return $this->belongsToMany(Post::class, 'likes', 'user_id', 'post_id')->withTimestamps();
    }
     //この投稿に対して既にlikeしたかどうかを判別する関数
    public function isLike($postId)
    {
        return $this->likes()->where('post_id', $postId)->exists(); //likes()いいねした投稿のidが入る.いいねした投稿のid($postId)とすでにいいねした投稿のid(post_id)一致したらTrue.なかったらFalseを返す
    }
    //isLikeを使って、既にlikeしたか確認したあと、いいねする（重複させないための関数）
    public function like($postId)
    {
        if($this->isLike($postId)){ //いいねされていた場合、いいね削除される
            $this->likes()->detach($postId);
             return 'unliked';
        }
        else{ //いいねされていなかった場合、like()に投稿idが入る
            $this->likes()->attach($postId); 
            return 'liked';
          
        }
    }
    
}   

