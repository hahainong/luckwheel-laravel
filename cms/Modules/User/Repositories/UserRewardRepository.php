<?php

namespace Cms\Modules\User\Repositories;

use Cms\Modules\Core\Models\Reward;
use Cms\Modules\User\Repositories\Contracts\UserRewardRepositoryContract;
use Cms\Modules\Core\Repositories\CoreRewardRepository;

class UserRewardRepository extends CoreRewardRepository implements UserRewardRepositoryContract
{
    protected $model;

    public function __construct
    (
        Reward $model
    )
    {
        $this->model = $model;
    }

    public function findBySender($id)
    {
        return $this->model->where('sender_id', $id)
            ->get();
    }
}

