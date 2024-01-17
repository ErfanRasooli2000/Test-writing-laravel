<?php

namespace Modules\Post\Database\Repositories\Contracts;

use Modules\Base\Database\Repositories\Contracts\BaseRepositoryInterface;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function create();
}
