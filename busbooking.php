
<?php
include "db.php";
$doj=$_POST['doj'];
$busno=$_POST['busno'];
$person=$_POST['person'];
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$qry="insert into customer(doj,busno,person,name,address,mobile) values('$doj','$busno','$person','$name','$address','$mobile')";
	$result=mysqli_query($con,$qry)or die(mysqli_error());
	if($result)
{
echo"<script>alert('You Have Sucessfully Book Your Seat');</script>";
echo"<script>window.location.href='printticket.php?mobile=$mobile'</script>";
}
else
{
echo"<script>alert('Failed Check Again');</script>";
echo"<script>window.location.href='index.php'</script>";
}
?>