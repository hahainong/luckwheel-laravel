<?php

namespace Cms\Modules\User\Services;

use Cms\Modules\User\Services\Contracts\UserUserServiceContract;
use Cms\Modules\Core\Services\CoreUserService;
use Cms\Modules\User\Repositories\Contracts\UserRewardRepositoryContract;
use Cms\Modules\User\Repositories\Contracts\UserUserRepositoryContract;

class UserUserService extends CoreUserService implements UserUserServiceContract
{
	protected $repository;
	protected $rewardRepository;

	function __construct
	(
		UserUserRepositoryContract $repository,
		UserRewardRepositoryContract $rewardRepository
	)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
		$this->rewardRepository = $rewardRepository;
	}

	public function storeReward($data)
	{
		$user = $this->repository->findByToken($data['token']);
		unset($data['token']);
		$data['sender_id'] = $user['id'];

		return $this->rewardRepository->store($data);
	}

	public function listReward($token)
	{
		$user = $this->repository->findByToken($token);

		$data = $this->rewardRepository->findBySender($user['id']);

		return $data;
	}
}

