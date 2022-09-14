<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();


        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    { 
        $student = new task;
        $student->description = $request->input('description');
        $student->taskname = $request->input('taskname');
        $student->file = $request->input('file');
        $student->enddate = $request->input('enddate');
        if($request->hasfile('file'))
        {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();    //image extension
            $filename = time().'.'.$extension;
            $file->move('uploads/students/',$filename);
            $student->file = $filename;

        }

        $student->save();
        return redirect()->route('tasks.index');

        // $request->validate([
        //     'description' => 'required',
        //     'taskname' => 'required',
        //     'file' => 'required',
        //     'enddate' => 'required',
        // ]);

         //Task::create($request->all());
       
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request,$id)
    {
        // $request->validate([

        // ]);
        // $task->update($request->all());

        $emp = task::find($id);
        $emp->description = $request->input('description');
        $emp->taskname = $request->input('taskname');
        $emp->file = $request->input('file');
        $emp->enddate = $request->input('enddate');
        if($request->hasfile('file'))
        {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); //image extension
            $filename = time().'.'.$extension;
            $file->move('uploads/students/',$filename);
            $emp->file = $filename;

        }

        $emp->save();
        return redirect()->route('tasks.index');

        // return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}