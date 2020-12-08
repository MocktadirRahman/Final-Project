

@extends('master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Register</title>
</head>

<body>

<div class="container">

<div class="row" style="margin-top:45px">

<div class="col-md-4 col-md-offset-4">
<h4>User Register</h4>

<form action="{{route('create')}}"method="post">
@csrf

</div class="result">
@if(Session::get('success'))
</div class="alert alert -success">
{{Session::get('success')}}
@endif
@if(Session::get('fail'))
</div class="alert alert -dangers">
{{Session::get('fail')}}
@endif
</div>
<div class="form-group">
<label for="">Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter Name">
<span class ="text-danger">@error('name') {{$message}} @enderror</span>
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
<button type="submit" class="btn btn-block btn-primary">Register</button>
</div>

<br>

<a href="login">Alreay an Users!</a>

</form>

</div>

</div>

</div>


    
</body>
</html>