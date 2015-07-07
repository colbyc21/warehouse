<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use App\DriverIssue;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
class DriverIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return Response
     */
    public function create($driver_id)
    {
        $driver  = Driver::findOrFail($driver_id);
        return View('issues.create')->withDriver($driver);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $driver_id
     * @return Response
     */
    public function store(Request $driver_id)
    {
       $driver  = Driver::findOrFail($driver_id);
        return $driver;
       $this->validate($driver_id, [
            'content' => 'required'
            ]);

        $issue = new DriverIssues();
        $issue->content = Input::get('content');
        $driver->listIssues()->save($issue);
        return Redirect::route('drivers.show', $driver->id)->with('status', 'Issue Aded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
