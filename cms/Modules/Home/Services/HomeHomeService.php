<?php

namespace Cms\Modules\Home\Services;

use Cms\Modules\Home\Services\Contracts\HomeHomeServiceContract;
use Cms\Modules\Core\Services\CoreHomeService;
use Cms\Modules\Home\Repositories\Contracts\HomeHomeRepositoryContract;

class HomeHomeService extends CoreHomeService implements HomeHomeServiceContract
{
	protected $repository;

	function __construct(HomeHomeRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

