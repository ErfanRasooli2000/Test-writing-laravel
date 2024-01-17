<?php

namespace Modules\Post\Database\Repositories\Repos;

use Modules\Base\Database\Repositories\Repos\BaseRepository;
use Modules\Post\Database\Repositories\Contracts\PostRepositoryInterface;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    public function create()
    {
        return "hi";
    }
}
