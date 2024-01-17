<?php

namespace Modules\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Comment\Models\Comment;
use Modules\Post\Database\Factories\PostFactory;
use Modules\User\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title" ,
        "text" ,
        "created_by"
    ];
    protected static function newFactory()
    {
        return PostFactory::new();
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,"commentable");
    }

    public function creator()
    {
        return $this->belongsTo(User::class , "created_by");
    }
}
