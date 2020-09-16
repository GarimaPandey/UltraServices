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
        <h2>Tasker's Detail</h2>

        <div class="container">
<form method="post" action="{{url('/addTasker')}}" enctype="multipart/form-data">
{{ csrf_field() }}
        <div class="row">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <div class="col-md-10">          
                    <input name="name" type="text" class="form-control" id="name"  placeholder="Name" required> 
                    </div>   
                  </div>
                  <div class="form-group">
                      <label for="profession">Profession:</label>
                      <div class="col-md-10">          
                      <input name="profession" type="text" class="form-control" id="profession"  placeholder="Profession" required>   
                      </div> 
                  </div>
                  <div class="form-group">
                    <label for="contact_no">Contact no</label>
                    <div class="col-md-10">          
                    <input name="contact_no" type="text" class="form-control" id="contact_no"  placeholder="Contact no" required> 
                    </div>   
                  </div>
                  <div class="form-group">
                    <label for="aadhar_card_no">Adhar Card No:</label>
                    <div class="col-md-10">          
                    <input name="aadhar_card_no" type="text" class="form-control" id="aadhar_card_no" placeholder="AAdhar card number" required>    
                    </div>
                  </div>
       
                  <div class="form-group">
                      <label for="date_of_birth">Date of Birth:</label>
                      <div class="col-md-10">          
                        <input type="text" class="form-control" id="date_of_birth" placeholder="Enter date_of_birth" name="adhar_card_no">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exp">Total Experience:</label>
                      <div class="col-md-10">          
                        <input type="text" class="form-control" id="experience" placeholder="Enter experience" name="experience">
                      </div>
                  </div>
                  <div class="form-group">
                    <label  for="vehicle_name_and_number">Vehicle Name and Number:</label>
                    <div class="col-md-10">          
                      <input type="text" class="form-control" id="vehicle_name_and_number" placeholder="Enter vehicle number and name" name="vehicle_number_name">
                    </div>
                  </div>
                    <div class="form-group">
                        <div class="col-lg-10">    
                        <label for="date_&_time">Days & Timings of Availability:</label>      
                            <input type="text" class="form-control" id="date_and_time" placeholder="Enter date and time" name="date_and_time"> 
                        </div>
                    </div>
            </div> 
            <div class="col-lg-16">    
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
  </form>
</div>
</div>
 </div>
    </body>
    </div>

</html>
