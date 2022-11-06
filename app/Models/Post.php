<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function playersCommented()
    {
        return $this->hasManyThrough(Player::class, Comment::class);
    }
}
