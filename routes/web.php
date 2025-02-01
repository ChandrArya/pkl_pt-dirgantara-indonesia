<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanbanController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleMiddleware;


// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/a321', function () {
    return view('a321');
})->name('a321');

Route::get('/a350', function () {
    return view('a350');
})->name('a350');

Route::get('/a380', function () {
    return view('a380');
})->name('a380');

Route::get('/tentangkami', function () {
    return view('tentangkami');
})->name('tentangkami');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');




Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('post.login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('post.register');


Route::middleware('auth')->group(function () {

    Route::get('/dashboardkanban', [KanbanController::class, 'index'])->name('kanban.index');
});

Route::middleware(['auth', RoleMiddleware::class . ':PM,APM'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('dashboard.user');
    Route::patch('/users/{user}/role', [UserController::class, 'updateRole'])->name('users.updateRole');
    Route::post('/board-lists', [KanbanController::class, 'storeBoardList'])->name('kanban.storeBoardList');
    Route::post('/tasks', [KanbanController::class, 'storeTask'])->name('kanban.storeTask');
    Route::post('/tasks/reorder', [KanbanController::class, 'reorderTasks'])->name('kanban.reorderTasks');
    Route::post('/tasks/{id}/update', [KanbanController::class, 'updateTask'])->name('kanban.updateTask');
    Route::delete('/tasks/{id}/delete', [KanbanController::class, 'deleteTask'])->name('kanban.deleteTask');
    Route::delete('/board-lists/{id}/delete', [KanbanController::class, 'deleteBoardList'])->name('kanban.deleteBoardList');
    Route::patch('/board-lists/{boardList}', [KanbanController::class, 'update'])->name('kanban.updateBoardList');
});



Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
