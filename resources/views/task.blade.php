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
                            <div class="well well-sm"> <h4><b>{{$d['id']}}</b></h4>
                              <h3><b>{{$d['description']}}</b></h3>
                              <input type="hidden" id="id" name="id" value="{{$d['id']}}">
                                <!-- <button type="button" id="edit" class="btn btn-info" data-toggle="modal" data-target="#myModal">Edit</button> -->
                                <button type="button" id="edit"class="btn btn-info" data-val="{{$d['id']}}" data-toggle="modal" data-target="#my-modal">Edit</a>
                                <button type="button" id="delete1" data-val="{{$d['id']}}" data-toggle="modal" data-target="#delete-modal" class="btn btn-danger">Delete</button>
                            </div>
                          </div>
                  </div>
                  <div class="modal fade" id="my-modal" tabindex="-1" role="dialog" aria-labelledby="my-modal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">My Modal</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                          <form method="post" action="{{url('/edit_task')}}" enctype="multipart/form-data">
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
                                        <input type="hidden" id="task_id" name="task_id"  class="form-control"/>
                                    </div>

                                    <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-9">
                                                <button type="submit" class="btn btn-primary">Submit Order</button>
                                            </div>
                                    </div>
                                </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>





            <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                          <form method="post" action="{{url('/delete')}}" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                 <h4>Are you Sure????</h4>

                                    <div class="form-group">
                                        <label for="delete_task_id"></label>
                                        <input type="hidden" id="delete_task_id" name="delete_task_id"  class="form-control"/>
                                    </div>

                                    <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-9">
                                                <button type="submit" class="btn btn-primary">Yes</button>
                                            </div>
                                    </div>
                                </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
  </div>
  @endforeach
</div>

</body>
<script >
$('#my-modal').on('show.bs.modal', function (event) {
  var myVal = $(event.relatedTarget).data('val');
  $('#task_id').val(myVal);
});

$('#delete-modal').on('show.bs.modal', function (event) {
  var newVal = $(event.relatedTarget).data('val');
  $('#delete_task_id').val(newVal);
});

</script>


</html>

