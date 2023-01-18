<?php

namespace Cms\Modules\Auth\Services;

use Cms\Modules\Auth\Services\Contracts\AuthUserServiceContract;
use Cms\Modules\Auth\Repositories\Contracts\AuthUserRepositoryContract;
use Cms\Modules\Core\Services\CoreUserService;
use Illuminate\Support\Facades\Auth;
use Socialite;

class AuthUserService extends CoreUserService implements AuthUserServiceContract
{
	protected $repository;

	function __construct(AuthUserRepositoryContract $repository)
	{
	    parent::__construct($repository);

	    $this->repository = $repository;
	}

	public function loginSocial()
	{
		$socialUser = Socialite::driver('facebook')->user();

		if ($socialUser) {
			$user = $this->repository->findSocialId($socialUser['id']);
			if (!$user) {
				$data = [
					'social_id' => $socialUser['id'],
					'name' => $socialUser['name'],
					'email' => $socialUser['email'],
					'social' => 'facebook',
					'token' => generate_random_string(10),
				];
	
				$store = $this->repository->store($data);
				Auth::login($store);

				return $store;
			}

			Auth::login($user);

			return $user;
			
		}

		return false;
	}
}
