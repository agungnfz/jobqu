<?php

namespace App\Http\Controllers\JobSeeker\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Account\Experience\ExperienceInterface;
use App\Http\Requests\Account\Experience\SaveRequest;
use App\Services\Account\ExperienceService;

class ExperienceController extends Controller
{
    protected $repoExper;

    protected $serviceExper;
 
    public function __construct(ExperienceInterface $repoExper){
        $this->repoExper = $repoExper;
        $this->serviceExper = new ExperienceService($this->repoExper);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return response()->json($this->repoExper->pagination());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.experience');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveRequest $request)
    {
        \DB::beginTransaction();
        try {

            $exper = $this->serviceExper->save($request);
            \DB::commit();
            return response()->json($exper);

        } catch (\Exception $e) {
            \DB::rollback();
            return response()->json($e->getMessage().' line='.$e->getLine(), 403);
        }        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
