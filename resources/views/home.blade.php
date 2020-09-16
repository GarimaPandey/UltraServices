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
                
        <div class="content">
            <div class="row">
            <div class="col-sm-6">
                    <div class="img_section"style="height:60px">
                       <a href="{{ url('/user') }}"> <figure><img src="user.png"></figure></a>
                        <h4><b>Want to get your task done??CLICK HERE!!</b></h4>
                    </div>
             </div>
            <div class="col-sm-6">
                    <div class="img_section" style="height 80px">
                    <a href="{{ url('/tasker') }}"> <figure><img src="tasker.jpeg"></figure></a>
                        &nbsp;<h4><b>Are you good at your job? join us!CLICK HERE!!</b></h4>
                    </div>
                 </div>              
            </div>
            </div>
        </div>
    </body>
    </div>

</html>
