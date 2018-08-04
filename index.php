<?php
include('db.php');
?>
<html>
<head>
<title>Welcome to Dolphine Bus Service.</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
<style type="text/css">
body
{

background-image:url(searchbus.jpg);
background-repeat:no-repeat;
}
#div3
{
float:left;
height:450px;
margin-top:20px;
width:345px;
background-position:left;
}
#myCrousel
{
margin-top:-20px;
height:550;
width:850;
}
div.container
{
height:1050;
width:850;
}
div.form-group
{
height:450px;
width:100px;
border:#996600;
margin-left:700px;
float:right;

}
#div2
{background-color:#666699;
height:50px;
width:820px;
}
#div1
{background-color:#CCCCCC;
height:220px;
width:180px;
float:left;
margin-top:-1000px;
margin-left:169px;
}
#div3
{
margin-left:349px;
margin-top:-100px;
height:200px;
width:820px;
}
</style>
</head>
<body>
<div class="container"align="center">
<div id="div2" align="right">
<table align="left" height="20px" width="300px">
<tr><th><font color="#00FFFF" size="+2" face="Courier New, Courier, monospace">
TU Bus Service</font></th></tr></table>
<table align="right" height="20px" width="500">
<tr><th><a href="gallery.php"><font color="#FFFFFF" size="+1">Gallery</font></a></th><th><a href="history.php"><font color="#FFFFFF" size="+1">History</font></a></th><th></a></th><th><a href="contact.php"><font color="#FFFFFF" size="+1">Contact Us</font></a></th><th><a href="register.php"><font color="#FFFFFF" size="+1">Register</font></a></th>
<th><a href="user_login.php"><font color="#FFFFFF" size="+1">LOGIN</font></a></th></tr>
</table>
</div>  
<h2></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center" style="margin-top:-20px">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="1024px-Setra_S416GT-HD_bus_from_Slovakia.JPG" style="width:850px; height:550px;">
      </div>
     <div class="item">
        <img src="27122008002.jpg" style="width:850px; height:550px;">
      </div>
    <div class="item">
        <img src="23609643271_43a7fce360_o.jpg" style="width:850px; height:550px;">
      </div>
      <div class="item">
        <img src="Indian-Bus.jpg" style="width:850px; height:550px;">
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>

<div id="div3">
<font size="+3" style="color:#33FFFF"> Mobile No:9777487444</font>
<font size="+3" style="color:#33FFFF">  @ Bus Stand Road Tezpur</font><br>
<font size="+1" style="color:#FFFF00"> Hours of operation::10:00 am - 9:00 pm</font><br>
<font style="color:#FFFF00"> copyright @Dolphine Bus Service</font>  
</div>
</body>
</html>
