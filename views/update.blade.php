@extends('master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update here-</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
    <h1> Update Info </h1>
    <from action ="updated" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}" > <br> <br>
    <input type="text" name="na1" value="{{$data['na1']}}" > <br> <br>
    <input type="text" name="na2" value="{{$data['na2']}}" ><br><br>
    <input type="text" name="na3" value="{{$data['na3']}}" ><br><br>
    <button type="submit" class="">Update</button>
</div>
</div>
</div>
</body>
</html>