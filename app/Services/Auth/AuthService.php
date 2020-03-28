<?php

namespace App\Services\Account;

use App\Repositories\Auth\AuthInterface;
use Illuminate\Http\Request;

class AuthService
{
    protected $auth;

    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }

    public function login(Request $request)
    {
        
    }
}
