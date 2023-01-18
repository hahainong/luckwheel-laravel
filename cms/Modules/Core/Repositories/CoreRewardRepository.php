<?php

namespace Cms\Modules\Core\Repositories;

use Cms\Modules\Core\Repositories\Contracts\CoreRewardRepositoryContract;
use Cms\Modules\Core\Models\Reward;

class CoreRewardRepository implements CoreRewardRepositoryContract
{
    protected $model;

    public function __construct(Reward $model) {
        $this->model = $model;
    }

    public function store($data)
    {
        return $this->model->create($data);
    }
}

