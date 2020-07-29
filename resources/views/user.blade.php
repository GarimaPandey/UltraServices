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
            @if (\Session::has('success'))
    <div class="alert alert-error">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif




     <div class="well">  
        <div class="content">
        <div class="container" >
  <h1>Users Detail</h1>
  <form method="post" action="/save_user" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="adress1" class="col-sm-3 col-form-label">Address 1</label>
            <div class="col-sm-9">
                <input name="address1" type="text" class="form-control" id="address1"
                       placeholder="Address1" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="address2" class="col-sm-3 col-form-label">Address 2</label>
            <div class="col-sm-9">
                <input name="address2" type="text" class="form-control" id="address2"
                       placeholder="Address 2" required>
            </div>
        </div>
     
        <div class="form-group row">
            <label for="address3" class="col-sm-3 col-form-label">Address 3</label>
            <div class="col-sm-9">
                <input name="address3" type="text" class="form-control" id="address3"
                       placeholder="Address 3" required>
            </div>
        </div>

         <div class="form-group row">
            <label for="phoneNumber" class="col-sm-3 col-form-label">Phone number</label>
            <div class="col-sm-9">
                <input name="phoneNumber" type="text" class="form-control" id="phoneNumber" placeholder="Phone number">
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit Order</button>
            </div>
        </div>
    </form>
 
</div>
</div>
       </div>
    </body>
    </div>

</html>
