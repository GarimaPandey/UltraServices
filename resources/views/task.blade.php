<!doctype html>
<html lang="{{ app()->getLocale() }}">
       <div class="hp">
@include('layouts.header_for_tasks')
<body>
<!-- Header -->
<div class="header">

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

  <h1><b><i>We have various categories to choose from</i></b></h1>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

<!-- Photo Grid -->
<div class="row"> 
@foreach($data as $d)
  <div class="column" style="border-color:black;border-size:3px">
            <div class="img_section" style="height 80px">
               <a href="{{ url('/user') }}"><figure> <img class="card-img-top" src="{{ asset('/images/'.$d['image']) }}" alt="Card image cap"></figure></a>
               <div class="well well-sm"> <h4><b>{{$d['task_name']}}</b></h4>
                <h3><b>{{$d['description']}}</b></h3>
                <input type="hidden" id="id" name="id" value="{{$d['id']}}">
                <button type="button" id="edit" class="btn btn-info" data-toggle="modal" data-target="#myModal">Edit</button>
                <button type="button" id="delete" class="btn btn-danger">Delete</button>
                </div>
            </div>
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p><form method="post" action="{{url('/edit_task')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    
    <div class="form-group">
        <label for="task_name">Task Name:</label>
        <input name="task_name" type="text" class="form-control" id="task_name"  required>    
    </div>
    
    <div class="form-group purple-border">
        <label for="task_description">Task Description:</label>
        <textarea class="form-control" id="task_description" name="task_description"rows="3"></textarea>
    </div>


    <div class="form-group">
        <label for="task">Task:</label>
        <input type="file" id="task_file_name" name="file" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="task_id"></label>
        <input type="hidden" id="task_id" name="task_id" value="" class="form-control"/>
    </div>

     <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit Order</button>
            </div>
    </div>
    
</form></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  </div>
  @endforeach
</div>

</body>
<script >

$(document).ready(function(){
  ('#edit').click(function(){
        var data = (this).closest('hidden');
console.log(data);

  });
});
</script>


</html>

