@extends('master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">

<h1>Profile</h1>
<a href="/edit" class="btn btn-info btn-lg">
          </a> Edit Profile <h1>
</h1>
</br>
</br>
</br>
</div>

<table class="table hover">
<thead>
<th>
Name
<th>
Email
<th>
</th>
</th>
</th>
</thead>

</table>
<tr>
<td>
{{$LoggedUserInfo->name}}
</td>
<td>
{{$LoggedUserInfo->email}}
</td>
<p>
<a href="logout" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
      </p> 
      <p>Unicode:
        <span class="glyphicon">&#xe163;</span>
      </p> 
</td>
<td>
</td>
</td>

</tr>

</div>
</div>
</body>
</html>