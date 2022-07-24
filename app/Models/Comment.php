<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'post_id',
        'message',
    ];

    /**
     * Linking to the users table.
     * 
     */
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * Linking to the posts table.
     * 
     */
    public function posts()
    {
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
}
