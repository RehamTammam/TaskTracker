<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTasks= Task::where('user_id', Auth::id())->get();

            return response()->json(['task'=>$allTasks], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $this->validate($request,[
 
             'taskContent'=>'required|min:3|max:50',
          ]);


$taskContent= $request->input('taskContent');

 $newTask=new Task;
 
 $newTask->taskContnt=$taskContent;
$newTask->user_id=Auth::id();
 $newTask->save();
 return response()->json(['task' => $newTask]);
 
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return response()->json(['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return response()->json(['task' => $task])
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    

  $updatedTask=$request->input("updatedTask");
 
 $newTask=  Task::find($id);
 $newTask->taskContnt=$updatedTask;
 $newTask->save();

 return response()->json(['task' => $newTask]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedTask=Task::find($id);
$deletedTask->delete();
 
return response()->json(['task' => $deletedTask]);
    }
}
