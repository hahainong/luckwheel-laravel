<?php

namespace Cms\Modules\Reward;

use Cms\CmsServiceProvider;
use Illuminate\Routing\Router;

class RewardServiceProvider extends CmsServiceProvider
{
    public function boot(Router $router)
    {
        parent::boot($router);
    }

	public function register()
	{
	    // Register services and repositories here...
	}
}

