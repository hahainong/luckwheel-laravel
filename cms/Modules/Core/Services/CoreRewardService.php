<?php

namespace Cms\Modules\Core\Services;

use Cms\Modules\Core\Services\Contracts\CoreRewardServiceContract;
use Cms\Modules\Core\Repositories\Contracts\CoreRewardRepositoryContract;

class CoreRewardService implements CoreRewardServiceContract
{
	protected $repository;
	protected $userRepository;

	function __construct
	(
		CoreRewardRepositoryContract $repository
	)
	{
	    $this->repository = $repository;
	}
}

