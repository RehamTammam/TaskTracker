

<a href="{{ url('/addTask') }}">Add Task</a>

<br>
<br>
<br>
<br>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@foreach($allTasks as $task)

<br>
<br>

{{$task->taskContnt}}
<br>
<form action="updateTask/{{$task->id}}"  method="post">
 {{csrf_field()}}
  <input type=text name="updatedTask">
  <button type="submit">Updat Task</button>
  
<a href="{{url("deleteTask/$task->id")}}" >Delete</a>

</form>


<br>


@endforeach


