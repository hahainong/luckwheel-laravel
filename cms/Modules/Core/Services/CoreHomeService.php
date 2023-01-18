<?php

namespace Cms\Modules\Core\Services;

use Cms\Modules\Core\Services\Contracts\CoreHomeServiceContract;
use Cms\Modules\Core\Repositories\Contracts\CoreHomeRepositoryContract;

class CoreHomeService implements CoreHomeServiceContract
{
	protected $repository;

	function __construct(CoreHomeRepositoryContract $repository)
	{
	    $this->repository = $repository;
	}
}

