<?php

namespace App\Http\Controllers\JobSeeker\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\User\SaveRequest;
use App\Providers\RouteServiceProvider;
use App\Repositories\Account\UserInterface;
use App\Services\Account\UserService;

class RegisterController extends Controller
{
    protected $users;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct(UserInterface $users)
    {
        $this->users = $users;
        $this->services = new UserService($this->users);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(SaveRequest $request)
    {
        $data = $this->services->save($request);
        if($data)
            return redirect($this->redirectTo);
        else
            return redirect('register');
    }
}
