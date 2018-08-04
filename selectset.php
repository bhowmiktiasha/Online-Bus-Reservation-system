<?php
$bus=$_REQUEST['busno'];
$dat=$_REQUEST['dat'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Passenger Details</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>

<body>
<div class="container">
  <div class="page-header">
    <h2>Enter Passenger Details For Bus Booking</h2>
 </div>
  <form action="busbooking.php" method="post">
  <div class="form-group">
    <label for="email">Date of Journey:</label>
    <input type="text" name="doj" value="<?php echo $dat ?>" readonly="readonly" class="form-control">
  </div>
  <div class="form-group">
    <label for="pwd">Bus No:</label>
    <input type="text" name="busno" value="<?php echo $bus ?>" readonly="readonly" class="form-control" id="pwd">
  </div>
  
  <div class="form-group">
  <label for="sel1">Select No Person</label>
  <select class="form-control" name="person">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
  </select>
</div>
  
  
   <div class="form-group">
    <label for="pwd">Name:</label>
    <input type="text" name="name" class="form-control" id="pwd">
  </div>
   <div class="form-group">
    <label for="pwd">Address:</label>
    <input type="text" name="address" class="form-control" id="pwd">
  </div>
    <div class="form-group">
    <label for="pwd">Mobile:</label>
    <input type="text" name="mobile"  class="form-control" id="pwd">
  </div>
 
  <input type="submit" name="submit" class="btn btn-default">
  </form>

</div>
</body>
</html>