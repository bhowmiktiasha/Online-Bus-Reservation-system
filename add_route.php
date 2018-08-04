<?php
     
     
      $submit=$_POST['submit'];
       
       $source      =        $_POST['source'];
       $destination =        $_POST['destination'];
       $bus_no      =        $_POST['bus_no'];
       $total_seat  =        $_POST['total_seat'];
       $date        =        $_POST['date'];
       $fare        =        $_POST['fare'];
       $time        =        $_POST['time'];
       
   //    echo $source."<br>";
    //   echo $seat."<br>";
     //  echo $fare;
       

    if($submit)       // checking whether submit button is pressed or not.
   {
       // insert to data base
    
    $connect=mysqli_connect("localhost","root","jay123@AS","online_bus_booking") or die("Error in connecting to local host");
                   
     
     
     //  mysqli_select_db($connect,"bus_booking") or die("ERROR in selecting data bases");    // selecting databases   
     
    //  echo " HELLO1 ";
     
  // $query=mysqli_query($connect,"INSERT INTO route(source,destination,seat,fare,date,time)
  // VALUES('$source' ,'$destination' , '$seat'  ,  '$fare' , '$date' , '$time' ) ") or die("ERROR IN INSERTING ");
        
     $query="INSERT INTO route_detail(source,destination,bus_no,total_seat,date,fare,time)
                             values('$source','$destination','$bus_no','$total_seat','$date','$fare','$time')";
     $result=mysqli_query($connect,$query);
     
     if($result)
     echo "ROUTE INFORMATION ADDED SUCCESSFULLY: ";
      else
       printf("FAILED %s",mysqli_error($connect));
                                                     
    }
     else
            echo "PLease submit form before ";
     
       

?>
 
