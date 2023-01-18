<?php

namespace Cms\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\User\Services\Contracts\UserUserServiceContract;
use Illuminate\Http\Request;

class UserController extends Controller 
{
    protected $service;

    public function __construct
    (
        UserUserServiceContract $service
    )
    {
        $this->service = $service;
    }

    public function luckwheel() 
    {
        return view('User::index');
    }

    public function profile()
    {
        return view('User::profile');
    }

    public function qr()
    {
        return view("User::qr");
    }

    public function reward(Request $request)
    {
        $store = $this->service->storeReward($request->all());

        return $store;
    }

    public function listReward(Request $request)
    {
        $data = $this->service->listReward($request->token);

        return view("User::list-reward", [
            'data' => $data
        ]);
    }
}