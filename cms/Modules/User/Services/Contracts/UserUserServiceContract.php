<?php

namespace Cms\Modules\User\Services\Contracts;

use Cms\Modules\Core\Services\Contracts\CoreUserServiceContract;

interface UserUserServiceContract extends CoreUserServiceContract
{
    public function storeReward($data);

    public function listReward($token);
}