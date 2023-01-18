<?php

namespace Cms\Modules\Auth\Repositories;

use Cms\Modules\Auth\Repositories\Contracts\AuthUserRepositoryContract;
use Cms\Modules\Core\Models\User;
use Cms\Modules\Core\Repositories\CoreUserRepository;

class AuthUserRepository extends CoreUserRepository implements AuthUserRepositoryContract
{
    protected $model;

    public function __construct
    (
        User $model
    )
    {
        $this->model = $model;
    }

    public function findSocialId($id)
    {
        return $this->model->where('social_id', $id)
            ->first();
    }
}
