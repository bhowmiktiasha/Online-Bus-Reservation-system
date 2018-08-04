<?php

session_start();

//echo $username;
//echo $password;

?>

<html>

<?php 

$username=$_SESSION[username];

//$_SESSION[username]=$username;

//echo session_name();


if($_SESSION[username])
{   echo " Hi ".$username ;
    echo "<br>"; 
  }
?>


<h2>! WELCOME TO TU BUS SERVICES !</h2>

<form action="" method="POST">

Source :  
<select name="source">
<option value="Tezpur University">TEZPUR UNIVERSITY </option>
<option value="Tezpur">TEZPUR</option>
</select> <br>

Destination: 
<select name="destination">
<option value="Tezpur">TEZPUR </option>
<option value="Tezpur University">TEZPUR UNIVERSITY</option>
</select> <br>

Date : 
<input type='date' name='date' required> <br> <br>
<input type='submit' value='SEARCH' name='submit'>

</form>



<?php


//session_start();

$submit=$_POST[submit];

$source=$_POST[source];
$destination=$_POST[destination];
$date=$_POST[date];

  if($submit)
{  
 // echo $source."<br>";
 // echo $destination."<br>";
 // echo "HELLO CHCEKING SEAT <br>";

    if($source == $destination)
   {   
        die("SOURCE AND DESTINATION CAN'T BE SAME !!"); 
   
   }
   
    else          // check for seat available 
  {
        $connect=mysqli_connect("localhost","root","jay123@AS","online_bus_booking") or die("Error in connecting to local host");
                   
         mysqli_select_db($connect,"online_bus_booking") or die("ERROR in selecting data bases");     
         $query=mysqli_query($connect,"SELECT * FROM route_detail
          WHERE source='$source' ");         // checking for source only because only Tu->Tezpur and vice-versa.

         $rows=mysqli_num_rows($query); 
    
         //echo "HELLO ";
       //  echo "TOTAL NO OF ROWS =".$rows."<br> <br>"; 
         // echo $rows;
   
             if($rows==0)                       // 0 row means no record found . so no bushes   
         { 
               
               die("NO AVAILABLE BUSHES ");
          }
   
            else                             // no check whether seat are available or not  
         {
              $temp_rows=mysqli_fetch_assoc($query);
              $db_date=$temp_rows['date'];                   
       
                 //    echo $db_date;
                 //  echo "<br>".$date;
        
                     if($date==$db_date)
              {  
                          echo " AVAILABLE BUSHES : <br><br>";
         
                         $query=mysqli_query($connect,"SELECT * FROM route_detail
                           WHERE source='$source' ");         // checking for source only because only Tu->Tezpur and vice-versa.
 ?>
      
   
                 <table id="table" width="900" height="100" border="1" ceilpadding="1" ceilspaccing="1">
      
     <tr>
          <th> source </th>
          <th> Destination </th>
          <th> Bus No. </th>
          <th> Seat Available </th>
          <th> Fare</th>
          <th> Date</th>          
          <th> Time </th>
          <th> BOOK NOW </th>          
     
     </tr>
      
 <?php
         while($temp_rows=mysqli_fetch_assoc($query))             // taking only one row record for simplicity
      {
            $source=$temp_rows['source'];
            $destination=$temp_rows['destination'];
            $bus_no=$temp_rows['bus_no'];
            $total_seat=$temp_rows['total_seat'];
            $fare=$temp_rows['fare'];
            $date=$temp_rows['date'];
            $time=$temp_rows['time'];
        
               echo "<tr>";
           
           echo "<td> $source </td>";
           echo "<td> $destination </td>";
           echo "<td> $bus_no </td>";
           echo "<td> $total_seat </td>";
           echo "<td> $fare </td>";
           echo "<td> $date </td>";
           echo "<td> $time </td>";
           
         $_SESSION[source]=$source;             // creating session for that user  
         $_SESSION[destination]=$destination;             // creating session for that user  
         $_SESSION[bus_no]=$bus_no;             // creating session for that user  
         $_SESSION[total_seat]=$total_seat;             // creating session for that user     
         $_SESSION[fare]=$fare;             // creating session for that user     
         $_SESSION[date]=$date;             // creating session for that user     
         $_SESSION[time]=$time;             // creating session for that user               
           
          $_SESSION[username]=$username;     // creating session for that user  
           
           if($total_seat<=0)
              echo "<td> <a href='#'>NOT AVAILABLE</a> </td> ";  
            else
              echo "<td> <a href='book_seat.php'>Book Now</a> </td> ";  
              
              echo "</tr>";
        
        }         // while loop body
       
              echo "</table>"; 
   }                         // body of  data==db_date 
         else  
             die("NO AVAILABLE SEATS ");  
               
            
           
            $_SESSION[username]=$username;             // creating session for that user  
        }                                      // body of checking seat are available or not 
     } 
   }
 
?>

</html>
