<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4344e7fc95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('style/style.css')}}">

</head>
<body>

    <ul class="nav justify-content-center mt-4 pb-4">
         
        <li class="nav-item">
            <a class="nav-link " href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ Route('restaurants.index') }}">List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>

        <div class="login-button">
            @if(!Auth::user())
            <a class="btn btn-success login-button" href="/login">Login</a>
            @else
            <p class="lead text-sm">Welcome, <a href="/profile" class="link-disable"><i class="fa-solid fa-user"></i> {{ Auth::user()->name }}</a> </p>
            @endif
        </div>
       
        
    </ul>
    @yield('content')
    

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>