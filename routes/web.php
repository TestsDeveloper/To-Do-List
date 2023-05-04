<?php

use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TodoListController::class, "show"])->name('todoList#home');
Route::post('todoList/create', [TodoListController::class, 'createTodoList'])->name('todoList#create');
 Route::delete('todoList/delete/{id}',[TodoListController::class,'deleteTodoList'])->name('todoList#delete');
 Route::post('todoList/edit/{id}',[TodoListController::class,'editTodoList'])->name('todo#edit');
