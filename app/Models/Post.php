<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bookmark;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'content',
    ];

    protected $dates = [
        'released_at',
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function bookmarks()
    {
        return $this->hasMany('App\Models\Bookmark');
    }
}