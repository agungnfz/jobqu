<?php

namespace App\Repositories\Auth;

use Illuminate\Http\Request;

interface AuthInterface
{
    public function login(Request $request);
    public function logout(Request $request);
    public function attemptLogin(Request $request);
    public function credentials(Request $request);
    public function sendLoginResponse(Request $request);
    public function sendFailedLoginResponse(Request $request);
    public function guard();
}
