<?php
namespace App\Services\Account;

use App\Repositories\Account\Experience\ExperienceInterface;
use Illuminate\Http\Request;

class ExperienceService
{
    protected $exper;

    public function __construct(ExperienceInterface $exper)
    {
        $this->exper = $exper;
    }

    public function save(Request $request)
    {
        $exper = [
            'name1'      => $request->name,
            'email'     => $request->email
        ];
        
        return $this->exper->save($exper);
    }
}
