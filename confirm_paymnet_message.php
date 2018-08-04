<?php
session_start();
?>

<?php

$username=$_SESSION[username];

    if($_SESSION[username]==true)
 {   echo "HI ".$username."<br><br>";

        $source=$_SESSION[source];

        //$destination=$_SESSION[destination];
        //$bus_no=$_SESSION[bus_no];

        $total_seat_taken=$_SESSION[total_seat_taken];    // need to check from databases whether NOW available or not

        //$fare=$_SESSION[fare];
        //$date=$_SESSION[date];
        //$time=$_SESSION[time];

        echo "Total seat taken : ".$total_seat_taken."<br>";

        // OPen databases to keep record of booked ticket            and update seat available 


   $connect=mysqli_connect("localhost","root","jay123@AS","online_bus_booking") or die("Error in connecting to local host");
                   
   //    mysqli_select_db($connect,"online_bus_booking") or die("ERROR in selecting data bases");    // selecting databases   
     
    
     // now check seat is available or not at current time 
     
          
    //  mysqli_select_db($connect,"online_bus_booking") or die("ERROR in selecting data bases");     
   $query=mysqli_query($connect,"SELECT * FROM route_detail
    WHERE source='$source' ");

   $rows=mysqli_num_rows($query); 
    
  //  echo "TOTAL NO OF ROWS =".$rows."<br> <br>"; 
   
   if($rows==0)                       // 0 row means no record found . so no bushes   
    die("No seat Available ");
     else                             // no check whether seat are available or not  
   {
 
         while($temp_rows=mysqli_fetch_assoc($query))         // taking only one row record for simplicity
      {
            $source=$temp_rows['source'];
            $destination=$temp_rows['destination'];
            $bus_no=$temp_rows['bus_no'];
      
            $total_seat=$temp_rows['total_seat'];
      
            $fare=$temp_rows['fare'];
            $date=$temp_rows['date'];
            $time=$temp_rows['time'];
  
       // checking for total seat taken by user is available right now or not. 
        
      echo "Total seat available in db : ".$total_seat."<br>";
          
        if($total_seat_taken>$total_seat)
       {
         echo("<br>ONLY ".$total_seat." SEAT IS AVAILABLE NOW");
         die("<br><br>SELECT AT MOST  ".$total_seat."<br>"); 
        }  
    
     else
   {            $current_seat_remain=$total_seat-$total_seat_taken;
               echo "Remaining seat available ".$current_seat_remain."<br>";
        
    // update now  ::
    
    $query="UPDATE route_detail SET total_seat='$current_seat_remain'";
       
   
     $result=mysqli_query($connect,$query);
     
      if(!$result)
       printf("FAILED %s",mysqli_error($connect));
 
     else
    { 
         // keep track of booked ticket detial.
         
         
         //     SEARCH ANOTHER DETAIL OF USER FROM DATA BASES AND INSERT TO TICKET booked detail for more info.
 /*    
     echo $username."<br>";
     
   $user_connect=mysqli_connect("localhost","root","jay123@AS","online_bus_booking") or die("Error in connecting to local host");
        
           $user_detail_query= "SELECT * FROM users_login__detail WHERE username='$username' ";
      
      
          $user_query_result= mysqli_query($user_connect,$user_detail_query);

         $user_detail_rows=mysqli_num_rows($user_query_result); 
    
    echo "TOTAL NO OF ROWS =".$user_detail_rows."<br> <br>"; 
     
   */  
     
     
     
        
     
  //........................ do.....................................................
    //........................ do.....................................................
  
        
     $query="INSERT INTO ticket_booking_detail(username,source,destination,bus_no,total_booked_seat,date,fare,time)
                             values('$username','$source','$destination','$bus_no','$total_seat_taken','$date','$fare','$time')";
     $result=mysqli_query($connect,$query);
     
   //  if($result)
    //  echo "BOOKD TICKET  INFORMATION ADDED SUCCESSFULLY: ";
           $_SESSION[username]=$username;
      if(!$result)
       printf("FAILED %s",mysqli_error($connect));      
       
       echo "<br> You have booked your ticket successfully : <br>";
       
     
              $_SESSION[username]=$username;
       
            //  header('Location: last_confirm_message.php');
 
       
  // redirecting to another page 
    
      //  header('Location: last_confirm_message.php');
       

       
       echo "<br><br>GO TO HOME PAGE -> <a href='user_login.php'> CLICK </a>";
   }     
     }
 } 
  } }
?>
