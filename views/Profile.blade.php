@extends('master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
   	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="image_outer_container">
			<div class="green_icon"></div>
		<div class="image_inner_container">
			<img src="https://i.pinimg.com/originals/43/96/61/439661dcc0d410d476d6d421b1812540.jpg">

      <form action="/action_page.php" id="usrform">
  Name: <input type="text" name="usrname">
  <input type="submit">
</form>

<textarea name="comment" form="usrform">Enter text here...</textarea>

				</div>
			</div>
		</div>
    <div class="form-mahin2">
    
	</div>
    <div class="form-mahin">
    <a href='logout'>Logout</a></p>
</div>
</body>
<style>
	html,body{
			height: 100%;
		}
       .container{
       	height: 100%;
       	align-content: center;
       }

       .image_outer_container{
       	margin-top: auto;
       	margin-bottom: auto;
       	border-radius: 50%;
       	position: relative;
       }
       .form-mahin {
  background-color: white;
  color: Black;
  padding: 15px 25px;
  text-align: center;
  text: center;
  display:yellow;
}
       .image_inner_container{
       	border-radius: 50%;
       	padding: 5px;
        background: #833ab4; 
        background: -webkit-linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4); 
        background: linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
       }
       .image_inner_container img{
       	height: 200px;
       	width: 200px;
       	border-radius: 50%;
       	border: 5px solid white;
       }

       .image_outer_container .green_icon{
         background-color: #4cd137;
         position: absolute;
         right: 30px;
         bottom: 10px;
         height: 30px;
         width: 30px;
         border:5px solid white;
         border-radius: 50%;
       }
</style>

</body>
</html>