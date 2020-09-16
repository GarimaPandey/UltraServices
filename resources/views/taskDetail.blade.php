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

</div>

<div class="well">  
    <div class="content">
        <div class="container" >
        
        <div class="well">  
        <div class="content">
        <div class="container" >
        <h1>Task Details</h1>
        <form method="post" action="/save_user" enctype="multipart/form-data">
        {{ csrf_field() }}
     <h2>Services and Description</h2>
       <p>{{$description}}</p>
        <div class="form-group row">
            <label for="hourly_rate" class="col-sm-3 col-form-label">Hourly Cost</label>
            <div class="col-sm-6">
            <label for="hourly_rate" class="col-sm-3 col-form-label"><h4>{{$hourly_rate}}</h4></label>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
        <div class="form-group row">
            <label for="adress1" class="col-sm-3 col-form-label">Estimated hours</label>
            <div class="col-sm-6">
                <input name="estimated_hours" type="text" class="form-control" id="estimated_hours" placeholder="Estimated Hours" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="discount" class="col-sm-3 col-form-label">Discount</label>
            @if($discount)
            <div style="color:red;" class="col-sm-6">
            <label for="discount" class="col-sm-3 col-form-label"><h4>10%</h4></label>
            </div>
            @else
            <div class="col-sm-8">
            <label for="discount" class="col-sm-8 col-form-label"><h5><b>You will get a discount in your next purchase!!!</b></h5></label>
            </div>
            @endif
        </div>
     
        <div class="form-group row">
            <label for="total_cost" class="col-sm-3 col-form-label">Total Cost</label>
            <div class="col-sm-6">
            <input name="total_cost" type="text" class="form-control" id="total_cost" placeholder="Total Cost" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Proceed to pay</button>
            </div>
        </div>
    </form>
        </div>
        </div>
</div>
 

</body>
</html>

