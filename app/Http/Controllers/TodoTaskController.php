<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoTaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('home', [
            'tasks'=>$tasks,
        ]);;
    }
    public function tambah(Request $request)
    {
       $request->validate([
            'task' =>'required|min:5',
       ],
    [
        'task.required' => 'Tugas Harus di Isi',
        'task.min' =>'Tugas minimal 5 karakter',
    ]);

       Task::create([
            'task' => $request->task,
            'tanggal' => now()
       ]);

        return redirect('/');
    }
    public function destroy($id)
    {
        $tasks = Task::find($id);
        $tasks->delete();
        return redirect('/');
    }
    
}
