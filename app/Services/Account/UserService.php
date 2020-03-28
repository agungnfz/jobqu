<?php
namespace App\Services\Account;

use App\Repositories\Account\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $users;

    public function __construct(UserInterface $users)
    {
        $this->users = $users;
    }

    public function save(Request $request)
    {
        $user = [
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ];
        
        return $this->users->save($user);
    }
}
