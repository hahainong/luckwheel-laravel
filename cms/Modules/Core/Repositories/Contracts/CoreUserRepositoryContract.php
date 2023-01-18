<?php

namespace Cms\Modules\Core\Repositories\Contracts;

interface CoreUserRepositoryContract
{
    public function store($data);

    public function find($id);

    public function findByToken($token);
}
