<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index(){
        // dd('b');
        $tasks = Task::all();
        // dd('a');
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function show($id){
      $task = Task::find($id);

      return view('tasks.show', ['task' => $task]);
    }

    public function create(){
      $task = new Task;

      return view('tasks.create', ['task' => $task]);
    }

    public function store(Request $req){
      $this->validate($req,[
          'content' => 'required|max:191'
      ]);
      $task = new Task;

      $task->content = $req->content;
      $task->save();

      return redirect('/');
    }

    public function edit($id){
      $task = Task::find($id);

      return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $req, $id){
      $task = Task::find($id);
      $task->content = $req->content;
      $task->save();

      return redirect('/');
    }

    public function destroy($id){
      $task = Task::find($id);
      $task->delete();

      return redirect('/');
    }

}
