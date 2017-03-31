<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskTracker extends Controller
{

public  $allTasks =['Task 1','Task 2','Task 3','AMR'];

   
function loadWelcomeView ()
{

return view ('home');


}
public function  loadViewTasks ($taskName=null)// a7tmal ygy aw la2 


{
if ($taskName)
{

array_push($this->allTasks,$taskName);

}
return view ('task')->with (['tasks'=>$this->allTasks ,'myName'=>"lolo"] );


}

public function loadAddTask ()



{

return view('addTaskForm');


}


public function loadTaskDetails ($id)



{

 
return view('taskDetails')->with (['taskDetail'=>$this->allTasks[$id]]);


}



public function showTask (Request $request)



{
$taskName= $request->input('taskName') ;
 

return  $this->loadViewTasks ($taskName);

 

}



}  


 


/*
public function view()
{
    $tasks = ['Stude Laravel', 'Read'];

    return view('task')->with(['tasks'=> $tasks, 'var'=> 1]);
}



} */





