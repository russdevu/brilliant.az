<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_title', 'post_price', 'post_desc', 'post_img', 'user_id'
    ];

    public function user() 
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
