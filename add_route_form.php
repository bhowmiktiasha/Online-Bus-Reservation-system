<?php
session_start();                                    // if session already start then continue.
?>

<html>

<?php
//session_start();                                    // if session already start then continue.

if($_SESSION[username])                         // checking for usernmae for its session
{
  // echo session_name()."<br>";
  // echo session_id()."<br>";

   echo "HI ".$_SESSION[username];    // welcome message 
   echo "<br> <br>";
   
   echo "WELCOME To ADD ROUTE PAGE <br> ";
   echo "<br> <br>";
 }
  else                                      // false means user didnot logged in already
        die("YOU MUST BE LOGGED IN ");           
 ?>

<!-   taking route information to add  ->


<form action="add_route.php" method="POST">

Source :  
<select name="source" required>
<option value="Tezpur University">TEZPUR UNIVERSITY </option>
<option value="Tezpur">TEZPUR</option>
</select> <br>

Destination: 
<select name="destination" required>
<option value="Tezpur">TEZPUR </option>
<option value="Tezpur University">TEZPUR UNIVERSITY</option>
</select> <br>


BUS NO.     : <input type='text' name='bus_no' required> <br>
TOTAL SEAT  : <input type='int' name='total_seat' required><br>
Date :<input type='date' name='date' required><br>
Fare :        <input type='int' name='fare' required  'fare'><br>
Time: <input type='time' name='time' required><br>

<input type='submit' value='SUBMIT' name='submit'>

</form>


</html>
