<?php

namespace Modules\Comment\Database\Repositories\Contracts;

use Modules\Base\Database\Repositories\Contracts\BaseRepositoryInterface;

interface CommentRepositoryInterface extends BaseRepositoryInterface
{
    public function create();
}
