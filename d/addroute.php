<html>
<head>
<title>
Welcome to Add Routes Pages.
</title>
<style>
div.form-group
{
margin-left:200px;
height:700px;
width:350px;
border:#996600;
}
#div
{
margin-left:200px;
height:650px;
width:350px;
border-bottom-color:#333333;
}
</style>
<body>
<div id="div" align="center">
<div class="form-group">
<table bgcolor="#CCCCCC"; border="1" bordercolor="#000000" bordercolorlight="#9900CC" bordercolordark="#990066" height="650px" width="600px">
<tr><th>Add Routes</th></tr>
<form name="route" action="" method="post">
<tr><th><label for="routes">ROUTES:</label>
         <select id="routes" name="r1">
    <option value="patna-samastipur">patna-samastipur</option>
    <option value="samastipur-patna">samastipur-patna</option>
    <option value="hajipur-patna">hajipur-patna</option>
    <option value="patna-hajipur">patna-hajipur</option>
    <option value="patna-muzaffarpur">patna-muzaffarpur</option>
      <option value="muzaffarpur-patna">muzaffarpur-patna</option>
      <option value="patna-bhagalpur">patna-bhagalpur</option>
      <option value="bhagalpur-patna">bhagalpur-patna</option>
      <option value="patna-gaya">patna-gaya</option>
      <option value="gaya-patna">gaya-patna</option>
      <option value="patna-ara">patna-ara</option>
      <option value="ara-patna">ara-patna</option>
      <option value="patna-ranchi">patna-ranchi</option>
      <option value="ranchi-patna">ranchi-patna</option>
    </select><br></th></tr></th></tr>
   <tr><th><label for="fare">FARES:</label>
   <input type="text" class="form-control" id="fare" name="r2"></th></tr>
   <tr><th><label for="num">Bus No.:</label>
   <input type="text" class="form-control" id="num" name="r3"></th></tr>
   <tr><th><label for="type">TYPES</label>
    <select id="type" name="r4">
    <option value="Semi-Deluxe">Semi-Deluxe</option>
    <option value="Deluxe">Deluxe</option>
    <option value="Deluxe-AC">Deluxe-AC</option>
    <option value="Deluxe-AC">Super Deluxe-AC</option>
    <option value="Volvo-AC">Volvo-AC</option>
    <option value="Luxuary-AC">Luxuary-AC</option>
    </th></tr>
   </select>
   <tr><th><label for="time">TIME:</label>
   <input type="time" class="form-control" id="time"  name="r5"></th></tr>
    <tr><th><button style="background-color:#00CC33; border-bottom-color:#660000; width:100%; height:50px;"type="submit" class="btn btn-default" name="save"><font size="+1">SAVE</font></button></th></tr></table>  
</div>
</div>
</div>
</body>
</html>
<?php
include "connect.php";
if(isset($_POST['save']))

{

//$bid=$_POST[''];
$brt=$_POST['r1'];
$bprice=$_POST['r2'];
$bnum=$_POST['r3'];
$btype=$_POST['r4'];
$btime=$_POST['r5'];

//echo $brt,$bprice,$bnum,$btype,$btime;
$qry="insert into route(route,price,busnum,type,time) values('$brt','$bprice','$bnum','$btype','$btime')";

if(mysqli_query($con,$qry))
echo "inseterd";
else
echo "not connected";

}

?>