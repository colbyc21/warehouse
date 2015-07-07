<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use App\DriverIssue;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
class DriverController extends Controller
{
     public function construct ()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('drivers.index')->with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $id
     * @return Response
     */
    public function store(Request $id)
    {
        $this->validate($id, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'cell_phone' => 'required|unique:drivers,cell_phone'
            ]);
               
        $first_name = Input::get('first_name');
        $last_name = Input::get('last_name');
        $cell_phone = Input::get('cell_phone');
        $driver = new Driver();
        $driver->first_name =$first_name;
        $driver->last_name  =$last_name;
        $driver->cell_phone =$cell_phone;
        $driver->save();
        return Redirect::route('drivers.index')->with('status', 'Driver Aded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
         $driver  = Driver::findOrFail($id);
         $issues  = $driver->driverIssues()->get();
         return View('drivers.show')
            ->withDriver($driver)
            ->withIssues($issues);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
       $driver = Driver::findOrFail($id);
        return view('drivers.edit')->withDriver($driver);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
           $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'cell_phone' => 'required|unique:drivers,cell_phone'
            ]);
               
        $first_name = Input::get('first_name');
        $last_name = Input::get('last_name');
        $cell_phone = Input::get('cell_phone');
        $driver = Driver::findOrFail($id);
        $driver->first_name =$first_name;
        $driver->last_name  =$last_name;
        $driver->cell_phone =$cell_phone;
        $driver->update();
        return Redirect::route('drivers.index')->with('status', 'Driver was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
       $driver = Driver::findOrFail($id)->delete();
       return Redirect::route('drivers.index')->with('status', 'Driver was deleted!');
    }
}
