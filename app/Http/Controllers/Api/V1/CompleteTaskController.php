<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class CompleteTaskController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $reques, Task $task)
    {
        $task->is_completed = $reques->is_completed;
        $task->save();

        return TaskResource::make($task);
    }
}
