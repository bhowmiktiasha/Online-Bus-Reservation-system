<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<select class="form-control">
      <option value="">~~Select Route~~</option>
      <?php
include('db.php'); 
$sql="SELECT * FROM route";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
  echo "<option value='$row[route]'>".$row['route'] . "</option>";
}
?>
      </select>
</body>
</html>