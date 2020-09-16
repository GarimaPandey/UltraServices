<!doctype html>
<html lang="{{ app()->getLocale() }}">
       <div class="hp">
@include('layouts.header')

    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"><b>Home</b></a>
                    @else
                        <a href="{{ route('login') }}"><b>Login</b></a>
                        <a href="{{ route('register') }}"><b>Register</b></a>
                    @endauth
                </div>
            @endif
            @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

  <form method="post" action="{{url('/upload_task')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    
    <div class="form-group">
        <label for="task_name">Task Name:</label>
        <input name="task_name" type="text" class="form-control" id="task_name" placeholder="taskname" required>    
    </div>

    
    <div class="form-group purple-border">
        <label for="task_description">Task Description:</label>
        <textarea class="ckeditor form-control" name="task_description"rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="task">Task:</label>
        <input type="file" name="file" class="form-control"/>
    </div>

     <div class="form-group">
        <label for="hourly_rate">Hourly Rate for the Task:</label>
        <input type="integer" name="hourly_rate" class="form-control"/>
    </div>

     <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit Order</button>
            </div>
    </div>
    
</form>
    </body>
    </div>

</html>


