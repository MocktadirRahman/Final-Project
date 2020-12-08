@extends('master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list Delete</title>
</head>
<body>

<h1>Favourites</h1>

@foreach ($edits as $item)

<h3>Favourite Game={{$item['na1']}}</h3>
<h3>Favourite Teacher={{$item['na2']}}</h3>
<h3>Skill={{$item['na3']}}</h3>
<p></p>
<H2><a href={{"delete/" .$item['id']}}>Delete</a></H2>
<H2><a href={{"update/" .$item['id']}}>Update</a></H2>
@endforeach

<a href="logout" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out

              
</body>
</html>