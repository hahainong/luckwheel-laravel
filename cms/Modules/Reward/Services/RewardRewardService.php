<?php

namespace Cms\Modules\Reward\Services;

use Cms\Modules\Reward\Services\Contracts\RewardRewardServiceContract;
use Cms\Modules\Core\Services\CoreRewardService;
use Cms\Modules\Reward\Repositories\Contracts\RewardRewardRepositoryContract;

class RewardRewardService extends CoreRewardService implements RewardRewardServiceContract
{
	protected $repository;

	function __construct(RewardRewardRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}
}

