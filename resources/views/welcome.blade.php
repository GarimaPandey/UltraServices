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
               <p> <img src="usLogo.png" style="width:10%;height:10%"></p>
                    <div class="title m-b-md">
                        <u><b>Ultra Services</b></u>
                    </div>

                    <div class="links">
                    <a href="https://laravel.com/docs">Appliances Repair</a>
                    <a href="https://laracasts.com">Plumbers</a>
                    <a href="https://laravel-news.com"> Electrician</a>
                    <a href="https://forge.laravel.com">Carpenters</a>
                    <a href="https://github.com/laravel/laravel">Painters</a>
                    <a href="https://github.com/laravel/laravel">Cleaning and Pest Control</a>
                    <a href="https://github.com/laravel/laravel">Disinfection</a>
                    <a href="https://github.com/laravel/laravel">Salon</a>

                    </div>
                </div>
        </div>
    </body>
    </div>

</html>
