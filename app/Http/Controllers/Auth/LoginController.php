<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Login\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Repositories\Auth\AuthInterface;
use App\Services\Auth\AuthService;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    use RedirectsUsers;
    
    protected $auth;

    protected $service;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct(AuthInterface $auth)
    {
        $this->middleware('guest')->except('logout');
        $this->auth = $auth;
        $this->service = new AuthService($this->auth);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $this->service->login($request);
        return $request->wantsJson()
            ? new Response('', 204)
            : redirect()->intended($this->redirectPath());
    }

    public function logout(Request $request)
    {
        $this->service->logout($request);
        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('/');
    }
}
