<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanbanController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('post.login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('post.register');

// Rute dengan proteksi middleware
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('main.dashboard'); // Halaman dashboard utama.
    })->name('dashboard');

    // Rute Kanban hanya untuk pengguna yang login.
    Route::get('/dashboardkanban', [KanbanController::class, 'index'])->name('kanban.index');
    Route::post('/board-lists', [KanbanController::class, 'storeBoardList'])->name('kanban.storeBoardList');
    Route::post('/tasks', [KanbanController::class, 'storeTask'])->name('kanban.storeTask');
    Route::post('/tasks/reorder', [KanbanController::class, 'reorderTasks'])->name('kanban.reorderTasks');
    Route::post('/tasks/{id}/update', [KanbanController::class, 'updateTask'])->name('kanban.updateTask');
    Route::delete('/tasks/{id}/delete', [KanbanController::class, 'deleteTask'])->name('kanban.deleteTask');
    Route::delete('/board-lists/{id}/delete', [KanbanController::class, 'deleteBoardList'])->name('kanban.deleteBoardList');
    Route::patch('/board-lists/{boardList}', [KanbanController::class, 'update'])->name('kanban.updateBoardList');

});


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
