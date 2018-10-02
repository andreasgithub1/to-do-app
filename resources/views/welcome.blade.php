<html>
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

       
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>To do List</h1>
                 <form action="{{ route('createTask') }}" method="POST" >
                <div class="form-group">
                  <label for="text">Enter a new task:</label>
                  <input type="text" class="form-control" id="task" name="task" placeholder="Enter your new task">
                </div>
            
                <button type="submit" class="btn btn-primary">Add Task</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token"></input>
              </form>

              <h2>To do list tasks</h2>
              <table class="table">
                <thead>
                  <tr>
                    <th>Task</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tasks as $task)
                  <tr>
                    <td>{{ $task->note }}</td>
                    <td><a href="{{ route('deleteTask', ['task_id' => $task->id]) }}">Delete Task</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </body>
</html>
