@extends('master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login</title>
</head>
<body>
<div class="container">
<div class="row" style="margin-top:45px">
<div class="col-md-4 col-md-offset-4">
<h4>User Login</h4>
<form action="{{route('check')}}"method="post">
@csrf
<div class="result">
@if(Session::get('fail'))
<div class="alert alert-dangers">
{{Session::get('fail')}}
</div>
@endif
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="text" class="form-control" name="email" placeholder="Enter email">
<span class ="text-danger">@error('email') {{$message}} @enderror</span>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <span class ="text-danger">@error('password') {{$message}} @enderror</span>
  </div>
<div class="form-group">
<button type="submit" class="btn btn-block btn-primary">Login</button>
</div>
<br>
<a href="register">create an new account now!</a>
</form>
</div>
</div>
</div>

    
</body>
</html>