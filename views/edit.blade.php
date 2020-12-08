@extends('master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<h1>Add Details</h1>
<h2> </h2>
<form action="edit"method="POST">
    @csrf
    <input type="text" name="na1" placeholder="Your favourite game"> <br> <br>
    <input type="text" name="na2" placeholder="Your favourite teacher"><br><br>
    <input type="text" name="na3" placeholder="Enter Your Skill"><br><br>

<button type="submit" class="">Save</button>
    
 </div>
 </div>
 </div>
  </form>
</body>
</html>