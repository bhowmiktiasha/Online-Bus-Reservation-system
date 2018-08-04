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
<tr><td>Add Routes</td><td></td></tr>
<form name="route" action="" method="post">
   <tr><td><label for="fare">BUS NO.:</label></td><td>
   <input type="text" class="form-control" id="bnum" name="bnum"></td></tr>
   <tr><td><label for="num">No. of Seat</label></td><td>
   <input type="text" class="form-control" id="snum" name="snum"></td></tr>
   <tr><td><label for="type">TYPES of BUS</label></td><td>
    <select id="type" name="type">
    <option value="Semi-Deluxe">Semi-Deluxe</option>
    <option value="Deluxe">Deluxe</option>
    <option value="Deluxe-AC">Deluxe-AC</option>
    <option value="Deluxe-AC">Super Deluxe-AC</option>
    <option value="Volvo-AC">Volvo-AC</option>
    <option value="Luxuary-AC">Luxuary-AC</option>
    </td></tr>
   </select>
   <tr><td><label for="time">START TIME:</label></td><td>
   <input type="time" class="form-control" id="time"  name="stime"></td></tr>
    <tr><td><label for="time">DESTINATION TIME:</label></td><td>
   <input type="time" class="form-control" id="time"  name="dtime"></td></tr>
   <tr><td><label for="time">PRICE/ONE-SEAT:</label></td><td>
   <input type="text" class="form-control" id="price"  name="price"></td></tr>
   <tr><td><label for="time">Driver Name:</label></td><td>
   <input type="text" class="form-control" id="time"  name="dtime"></td></tr>
    <tr><td><button style="background-color:#00CC33; border-bottom-color:#660000; width:100%; height:50px;"type="submit" class="btn btn-default" name="save"><font size="+1">SAVE</font></button></td><td> 
    <button style="background-color:#00CC33; border-bottom-color:#660000; width:100%; height:50px;"type="submit" class="btn btn-default" name="save"><font size="+1"><a href="../index.php">BACK TO HOME</a></font></button></td></tr></table> 
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