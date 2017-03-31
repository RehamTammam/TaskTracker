<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Task;
use Illuminate\Http\Request;


// use app asm al model 
// use model
class taskTracker extends Controller
{
 //Todo : al functions aly htt3amel m3 al database

public function addTask (Request $request)
{



$this->validate($request,[
// hna hn3ml al rules
'taskContent'=>'required|min:3|max:50',
]);


$taskContent= $request->input('taskContent');

 $newTask=new Task;
 
 $newTask->taskContnt=$taskContent;
$newTask->user_id=Auth::id();
 $newTask->save();
 return redirect('getTasks');
 
  
}



public function getAllTasks ()

{
// $newTask= new Task;
$allTasks= Task::where('user_id', Auth::id())->get();

return view('task')->with(['allTasks'=>$allTasks]);


}


public function updateTaskContent(Request $request ,$taskId)
{

 

$this->validate($request,[
// hna hn3ml al rules
'updatedTask'=>'required|min:3|max:50',
]);

 


  $updatedTask=$request->input("updatedTask");
 
 $newTask=  Task::find($taskId);
 $newTask->taskContnt=$updatedTask;
 $newTask->save();

 return redirect('getTasks'); 

}

 public function deleteTaskContent ($taskId)
 {


$deletedTask=Task::find($taskId);
$deletedTask->delete();
 
return redirect('getTasks');


 }




public function loadAddTaskView ()
{

return view('addTaskForm');


}






}
