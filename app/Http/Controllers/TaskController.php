<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
	protected $tasks;

    //
	public function __construct(TaskRepository $tasks)
	{
		$this->middleware('auth');
		$this->tasks = $tasks;
	}

	public function index(Request $request)
	{
		return view('tasks.index', [
			'tasks' => $this->tasks->forUser($request->user()),
		]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:225',
		]);

		$request->user()->tasks()->create([
			'name' => $request->name,
		]);

		return redirect('/tasks');
	}

	public function destory(Request $request, Task $task)
	{
		$this->authorize('destory', $task);
		$task->delete();
		
		return redirect('/tasks');
	}
}
