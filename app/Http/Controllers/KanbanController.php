<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\BoardList;
use App\Models\Task;
use Illuminate\Http\Request;

class KanbanController extends Controller
{
    public function index()
    {
        $board = Board::with('boardLists.tasks')->first();

        if (!$board) {
            return redirect()->route('kanban.create')->with('error', 'Board not found. Please create a new board.');
        }

        return view('dashboard.kanban', compact('board'));
    }


    public function storeBoardList(Request $request)
    {
        $request->validate(['name' => 'required', 'board_id' => 'required']);
        BoardList::create([
            'name' => $request->name,
            'board_id' => $request->board_id,
            'position' => BoardList::where('board_id', $request->board_id)->count() + 1,
        ]);

        return redirect()->route('kanban.index');
    }

    public function storeTask(Request $request)
    {
        $request->validate(['title' => 'required', 'board_list_id' => 'required']);
        Task::create([
            'title' => $request->title,
            'board_list_id' => $request->board_list_id,
            'position' => Task::where('board_list_id', $request->board_list_id)->count() + 1,
        ]);

        return redirect()->route('kanban.index');
    }

    public function reorderTasks(Request $request)
    {
        foreach ($request->tasks as $task) {
            Task::where('id', $task['id'])->update(['position' => $task['position']]);
        }

        return response()->json(['success' => true]);
    }

    public function updateTask(Request $request, $id)
{
    $request->validate(['title' => 'required']);
    $task = Task::findOrFail($id);
    $task->update(['title' => $request->title]);

    return redirect()->route('kanban.index')->with('success', 'Task updated successfully!');
}

public function deleteTask($id)
{
    $task = Task::findOrFail($id);
    $task->delete();

    return redirect()->route('kanban.index')->with('success', 'Task deleted successfully!');
}

public function deleteBoardList($id)
{
    $boardList = BoardList::findOrFail($id);

    // Delete all associated tasks
    $boardList->tasks()->delete();

    // Delete the board list
    $boardList->delete();

    return redirect()->route('kanban.index')->with('success', 'Board list deleted successfully!');
}

public function update(Request $request, BoardList $boardList)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Update nama list
    $boardList->name = $request->name;
    $boardList->save();

    return redirect()->back()->with('success', 'Board List updated successfully');
}


}
