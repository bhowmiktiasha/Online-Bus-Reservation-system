<?php
 $a=$_REQUEST['mobile'];
?>
<?php
include('db.php'); 
$sql=mysqli_query($con,"SELECT * FROM customer where mobile='$a'");
$result=mysqli_fetch_array($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.wrapper{
	width:595px;
	height:842px;
	margin:0 auto;
	padding:0;
	border:1px solid #CCC;
}
</style>
</head>
<body>
<div class="wrapper">
  <h2 align="center">Bus Ticket</h2>
 <h6 align="center">Booking ID:-0000<?php echo $result['id']; ?></h6>
 <p><b>Ticket and Customer Details</b></p>
 <table border="1" width="100%">
 <tr><td>Name</td><td><?php echo $result['name']; ?></td></tr>
 <tr><td>Address</td><td><?php echo $result['address']; ?></td></tr>
 <tr><td>Mobile</td><td><?php echo $result['mobile']; ?></td></tr>

 <tr><td>Bus No</td><td><?php echo $b=$result['busno']; ?></td></tr>
 <?php
 $sql2=mysqli_query($con,"SELECT * FROM route where busnum='$b'");
$row=mysqli_fetch_array($sql2);
 ?>
  <tr><td>Route</td><td> <?php   echo $row['route']; ?></td></tr>
 <tr><td>Date Of Journey</td><td><?php echo $result['doj']; ?></td></tr>
 <tr><td>Booking Amount</td><td><?php  $c=$result['person']; ?> <?php   $d=$row['price']; ?>  <?php echo $p=$c*$d;?></td></tr>
  <tr><td>No OF Person</td><td><?php  echo $result['person']; ?></td></tr>
 <tr><td>Type Of Bus</td><td> <?php   echo $row['type']; ?></td></tr></td></tr>
</table>
<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
</div>
</body>
</html>