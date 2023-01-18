<?php

namespace Cms\Modules\User;

use Cms\CmsServiceProvider;
use Cms\Modules\User\Repositories\Contracts\UserRewardRepositoryContract;
use Cms\Modules\User\Repositories\Contracts\UserUserRepositoryContract;
use Cms\Modules\User\Repositories\UserRewardRepository;
use Cms\Modules\User\Repositories\UserUserRepository;
use Cms\Modules\User\Services\Contracts\UserUserServiceContract;
use Cms\Modules\User\Services\UserUserService;
use Illuminate\Routing\Router;

class UserServiceProvider extends CmsServiceProvider
{
    public function boot(Router $router)
    {
        parent::boot($router);
    }

	public function register()
	{
	    // Register services and repositories here...
        $this->app->bind(UserUserRepositoryContract::class, UserUserRepository::class);
        $this->app->bind(UserUserServiceContract::class, UserUserService::class);
        $this->app->bind(UserRewardRepositoryContract::class, UserRewardRepository::class);
	}
}

