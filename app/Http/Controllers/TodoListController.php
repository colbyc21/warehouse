<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\TodoList;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;

class TodoListController extends Controller
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
        $todo_lists = TodoList::all();
        return view('todos.index')->with('todo_lists', $todo_lists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View('todos.create');       
        
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $id
     * @return Response
     */
    public function store(Request $id)
    {

        $this->validate($id, [
            'title' => 'required|unique:todo_lists,name',
            ]);
               
        $name = Input::get('title');
        $list = new TodoList();
        $list->name =$name;
        $list->save();
        return Redirect::route('todos.index')->with('status', 'List Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $list = TodoList::findOrFail($id);
        return View('todos.show')->withList($list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return Response
     */
    public function edit($id)
    {
        $list = TodoList::findOrFail($id);
        return view('todos.edit')->withList($list);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  int $id
     * 
     */
    public function update($id)
    {
        return input::all();
          $this->validate($id, [
            'name' => 'required|unique:todo_lists',
            ]);
               
        $name = Input::get('name');
        $list = TodoList::findOrFail($id);
        $list->name = $name;
        $list->update();
        return Redirect::route('todos.index')->with('status', 'List Was Updated!');
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
