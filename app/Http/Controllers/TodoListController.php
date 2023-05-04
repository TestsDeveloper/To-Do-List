<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
// use Illuminate\Contracts\Validation\Validator;

class TodoListController extends Controller
{
    //show
    public function show() {
        return view("list.index");
    }

    //create todolist
    public function createTodoList(Request $request) {
        $todoList = $this -> getPostData($request);
        TodoList::create($todoList);
        return redirect()->route("todoList#home")->with(["alertSuccessDisplay"=>"Create Successfully..."]);

    }


    // get post data
    private function getPostData($request) {

        return [
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description
        ];
    }

}
