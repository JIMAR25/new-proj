<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable = [
        'title',
        'content',
        'photos'
    ];

    public function likes()
    {
        return $this->belongsToMany(User::class, 'event_likes', 'evenement_id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    
}
