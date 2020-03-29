<?php

namespace App\Repositories\Account\User;

use App\Models\Account\User;

class UserRepository implements UserInterface
{
    protected $user;
    
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function find($id){

    }

    public function save(Array $request){
        return $this->user->create($request);
    }

    public function update(Array $request, $id){

    }

    public function delete($id){

    }

    public function all()
    {
        return $this->user->all();
    }

}