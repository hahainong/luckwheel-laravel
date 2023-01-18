<?php

namespace Cms\Modules\Home;

use Cms\CmsServiceProvider;
use Illuminate\Routing\Router;

class HomeServiceProvider extends CmsServiceProvider
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

