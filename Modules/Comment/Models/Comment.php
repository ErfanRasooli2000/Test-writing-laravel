<?php

namespace Modules\Comment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Comment\Database\Factories\CommentFactory;
use Modules\Post\Models\Post;
use Modules\User\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        "text",
        "commentable_type",
        "commentable_id",
        "created_by"
    ];

    public static function newFactory()
    {
        return CommentFactory::new();
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function creator()
    {
        return $this->belongsTo(User::class , "created_by");
    }
}
