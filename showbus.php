<?php
 $a=$_POST['route'];
 $b=$_POST['date'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>

<body>
<div class="container">
  <div class="page-header">
    <h2>List Buses <?php echo $a   ?> Route</h2>
</div>
<table class="table table-bordered">
<tr><td>Sr.No</td><td>Description</td><td> Seat no.</td><td>Price</td><td>Book Now</td></tr>
<?php
include('db.php'); 
$sql="SELECT * FROM route where route='$a'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
  {
?>
      <tr><td><?php echo $row['id'];?></td><td><?php echo $row['type'];?></td><td><?php echo $row['busnum'];?></td><td><?php echo $row['price'];?></td><td><a href="selectset.php?busno=<?php echo $row['busnum']?> & dat=<?php echo $b ?>">Book Now</a></td></tr>
      
      <?php
      }
?>

</table>
</div>
</body>
</html>