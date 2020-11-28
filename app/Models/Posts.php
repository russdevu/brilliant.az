<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Like;


class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_title', 'post_price', 'post_desc', 'post_img', 'user_id'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function likedBy(User $user) 
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'post_id', 'id');
    }
}
