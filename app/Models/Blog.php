<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $attributes = [
        'thumbnail' => ''
    ];

    
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
