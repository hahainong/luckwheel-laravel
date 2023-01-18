<?php

namespace Cms\Modules\Core\Repositories;

use Cms\Modules\Core\Repositories\Contracts\CoreHomeRepositoryContract;
use Cms\Modules\Core\Models\Home;

class CoreHomeRepository implements CoreHomeRepositoryContract
{
    protected $model;

    public function __construct(Home $model) {
        $this->model = $model;
    }
}

