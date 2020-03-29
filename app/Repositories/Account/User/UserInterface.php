<?php

namespace App\Repositories\Account\User;

interface UserInterface
{
    public function find($id);
    public function save(Array $array);
    public function update(Array $array, $id);
    public function delete($id);
    public function all();
}