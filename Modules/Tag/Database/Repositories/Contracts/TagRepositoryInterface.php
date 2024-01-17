<?php

namespace Modules\Tag\Database\Repositories\Contracts;

use Modules\Base\Database\Repositories\Contracts\BaseRepositoryInterface;

interface TagRepositoryInterface extends BaseRepositoryInterface
{
    public function create();
}
