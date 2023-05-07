<?php

namespace App\Http\Controllers;

use App\Http\Requests\todoListRequest;
use App\Models\TodoList;
use Illuminate\Http\Request;


// use Illuminate\Contracts\Validation\Validator;

class TodoListController extends Controller
{
    //show
    public function show(TodoList $todoList) {
        $showData=  $todoList->orderBy('created_at','desc')->get();
        return view("list.index",compact('showData'));
    }

    //create todolist
    public function createTodoList(Request $request) {
        $todoList = $this -> getPostData($request);
        TodoList::create($todoList);
        return redirect()->route("todoList#home")->with(["alertSuccessDisplay"=>"Create Successfully..."]);

    }

    public function deleteTodoList(TodoList $todoList ,$id){
        $todoList->find($id)->delete();

        return redirect()->route('todoList#home')->with(['deleteSuccess'=>'Delete Successfully...']);
    }

    public function editPage(TodoList $todoList,Request $request){
        $showEditData =$todoList->where('id',$request->id)->first();


        return response()->json([
            'message' => 'success',
            'editData' => $showEditData
        ]);
    }



    public function editTodoList(Request $request,TodoList $todoList,$id){
        $getData =$this->getPostData($request);

        $todoList->where('id',$id)->update($getData);


        return back()->with(['updateSuccess'=> 'Update Successfully....']);
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
