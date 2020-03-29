<?php

namespace App\Repositories\Account\Experience;

interface ExperienceInterface
{
    public function find($id);
    public function save(Array $array);
    public function update(Array $array, $id);
    public function delete($id);
    public function all();
    public function pagination();
}