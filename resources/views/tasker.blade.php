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
            <div class="well">  
        <div class="content">
        <div class="container">
  <h2>Tasker's Detail</h2>
  <form class="form-horizontal" action="/action_page.php">
   <div class="row">
    <div class="form-group">
      <label class="control-label col-md-10" for="name">Name:</label>
      <div class="col-md-10">
        <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-10" for="profession">Profession:</label>
      <div class="col-md-10">          
        <input type="profession" class="form-control" id="profession" placeholder="Enter Profession" name="profession">
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label class="control-label col-md-10" for="contact">Contact No:</label>
      <div class="col-md-10">
        <input type="contact" class="form-control" id="contact" placeholder="Enter contact" name="contact">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-10" for="pwd">Adhar Card No:</label>
      <div class="col-md-10">          
        <input type="adhar_card_no" class="form-control" id="adhar_card_no" placeholder="Enter adhar_card_no" name="adhar_card_no">
      </div>
      </div>
      </div>
      <div class="row">
     <div class="form-group">
      <label class="control-label col-md-10" for="email">Date of Birth:</label>
      <div class="col-md-10">
        <input type="dob" class="form-control" id="dob" placeholder="Enter dob" name="dob">
      </div>
      </div>
    <div class="form-group">
      <label class="control-label col-md-10" for="exp">Total Experience:</label>
      <div class="col-md-10">          
        <input type="experience" class="form-control" id="experience" placeholder="Enter experience" name="experience">
      </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
      <label class="control-label col-md-10" for="vehicle_name_and_number">Vehicle Name and Number</label>
      <div class="col-md-10">          
        <input type="vehicle_number_name" class="form-control" id="vehicle_name_and_number" placeholder="Enter vehicle number and name" name="vehicle_number_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-10" for="date_&_time">Date and Time</label>
      <div class="col-md-10">          
        <input type="date_and_time" class="form-control" id="date_and_time" placeholder="Enter date and time" name="date_and_time">
      </div>
    </div>

    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-md-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>

       </div>
    </body>
    </div>

</html>
