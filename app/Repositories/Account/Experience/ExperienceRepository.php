<?php

namespace App\Repositories\Account\Experience;

use App\Models\Account\Experience;

class ExperienceRepository implements ExperienceInterface
{
    protected $experience;
    
    public function __construct(Experience $experience)
    {
        $this->experience = $experience;
    }

    public function find($id){

    }

    public function save(Array $request){
        return $this->experience->create($request);
    }

    public function update(Array $request, $id){

    }

    public function delete($id){

    }

    public function all()
    {
        return $this->experience->all();
    }

    public function pagination(){
        return $this->experience->paginate(15);
    }

}