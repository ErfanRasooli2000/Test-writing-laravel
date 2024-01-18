<?php

namespace Modules\Tag\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Post\Models\Post;
use Modules\Tag\Database\Factories\TagFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public static function newFactory()
    {
        return TagFactory::new();
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class , "tag_post");
    }
}
