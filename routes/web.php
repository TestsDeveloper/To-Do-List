<?php

use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TodoListController::class, "show"])->name('todoList#home');
Route::post('todoList/create', [TodoListController::class, 'createTodoList'])->name('todoList#create');
