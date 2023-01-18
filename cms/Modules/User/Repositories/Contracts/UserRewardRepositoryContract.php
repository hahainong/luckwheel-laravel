<?php

namespace Cms\Modules\User\Repositories\Contracts;

use Cms\Modules\Core\Repositories\Contracts\CoreRewardRepositoryContract;

interface UserRewardRepositoryContract extends CoreRewardRepositoryContract
{
    public function findBySender($id);    
}
