<?php

namespace Modules\User\Database\Repositories\Contracts;

use Modules\Base\Database\Repositories\Contracts\BaseRepositoryInterface;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function create();
}
