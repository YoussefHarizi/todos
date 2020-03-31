<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoControllers extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        // return view('todo', ['todos' => $todos]);
        // return view('todo', compact('todos'));
        return view('todos.index')->with('todos', $todos);
    }
    public function show($id)
    {
        $todo_id = Todo::find($id);
        return view('todos.show', compact('todo_id'));
    }
    public function create()
    {

        return view('todos.create');
    }
    public function store(Request $request)
    {
        // return $request->all();
        // return $request->input('title');
        // return $request->discription;
        // $validated = $request->validate([
        //     'title' => 'required |min:6',
        //     'discription' => 'required'
        // ]);
        $this->validate($request, [
            'title' => 'bail | required |min:6',
            'discription' => 'bail | required'
        ]);
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->discription = $request->discription;
        // $todo->complited = false;
        $todo->save();
        $request->session()->flash('success', 'task added succesfully');
        return redirect('/');
    }
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit')->with('todo', $todo);
    }
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $this->validate($request, [
            'title' => 'bail | required |min:6',
            'discription' => 'bail | required'
        ]);
        $todo->title = $request->title;
        $todo->discription = $request->discription;
        $todo->save();
        $request->session()->flash('update', 'task updated succesfully');
        return redirect('/');
    }
    public function distroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        session()->flash('destroy', 'task deleted succesfully');
        return redirect('/');
    }
    public function complited($id)
    {
        $todo = Todo::find($id);
        $todo->complited = true;
        $todo->save();
        session()->flash('complited', 'task complited succesfully');
        return redirect('/');
    }
    public function incomplited($id)
    {
        $todo = Todo::find($id);
        $todo->complited = false;
        $todo->save();
        return redirect('/');
    }
}
