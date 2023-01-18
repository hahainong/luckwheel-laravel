<?php

namespace Cms\Modules\User\Tests;

use Cms\Modules\User\UserServiceProvider;
use Cms\Modules\Core\Tests\CoreTestCase;

abstract class UserTestCase extends CoreTestCase
{

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    protected function getPackageProviders($app): array
    {
        return [
            UserServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
