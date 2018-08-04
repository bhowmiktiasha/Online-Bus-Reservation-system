<?php
session_start();
?>

<html>

<?php

$username=$_SESSION[username];

echo "HI ".$username."<br>";

$source=$_SESSION[source];
$destination=$_SESSION[destination];
$date=$_SESSION[date];
$time=$_SESSION[time];
$fare=$_SESSION[fare];
$bus_no=$_SESSION[bus_no];
$total_seat=$_SESSION[total_seat];

// NEEDS TO CHECK FROM DATABASES FOR UPDATED AVAILABILITY OF SEATS .



         $connect=mysqli_connect("localhost","root","jay123@AS","online_bus_booking") or die("Error in connecting to local host");
                   
     //    mysqli_select_db($connect,"online_bus_booking") or die("ERROR in selecting data bases");     
       
         $query=mysqli_query($connect,"SELECT * FROM route_detail
          WHERE source='$source' ");         // checking for source only because only Tu->Tezpur and vice-versa.

         $rows=mysqli_num_rows($query); 
   
       //    echo "TOTAL NO OF ROWS =".$rows."<br> <br>"; 

         $_SESSION[username]=$username;
   
             if($rows==0)                       // 0 row means no record found . so no bushes   
            {

                   echo "NOW NO AVAILABLE BUSHES ";
                  die(" <a href='search_bushes.php'>BACK TO SEARCH</a> ");  
               }
               
            else                             // no check whether seat are available or not  
          {
              $temp_rows=mysqli_fetch_assoc($query);
              
              $db_total_seat=$temp_rows['total_seat'];
              $db_date=$temp_rows['date'];                    // date checking from data bases              
               
            //   echo " seat= ".$db_total_seat;       
         }           
          
                       if($date==$db_date)
                   {                       
                        if($db_total_seat<1)
                      {   echo " <br>SEATS FULL : NOW NO SEATS AVAILABLE !!";
                           die(" <a href='search_bushes.php'>BACK TO SEARCH</a> "); 
                       }
                        $db_fare=$temp_rows['fare'];
                        $db_time=$temp_rows['time'];
                        $db_bus_no=$temp_rows['bus_no'];

                       //  if($db_total_seat<1)
                        //  die("NOW NO SEATS AVAILABLE !! ");
                    
                  //     echo "db_time : ".$db_time." , time : "."$time"."<br>";
                    
                    
                             if($db_time!=$time)
                             echo "<br>THERE IS CHANGES IN TIME !!"; 
                             if($db_fare!=$fare)
                             echo "<br>THERE IS CHANGES IN Fare !!";
                             if($db_bus_no!=$bus_no)
                             echo "<br>THERE IS CHANGes OF BUSHES !!";
                   }
                         else
                              {  echo "<br>NOW NO SEATS AVAILABLE ON CHOSSEN DATE  !!" ;
                                  die(" <a href='search_bushes.php'>BACK TO SEARCH</a> "); 
                                }
            
?>
 
                                <h4><?php echo "ROUTE INFORMATION : <br>"; ?> </h4>
                               
                                <?php echo "Source: ".$source."<br>"; ?>  
                                <?php echo "Destination: ".$destination."<br>"; ?>
                                <?php echo "Bus No.: ".$db_bus_no."<br>"; ?>  
                                
                                <?php echo "Total seat Available ".$db_total_seat."<br>"; ?>  
                                
                                <?php echo "Fare: ".$db_fare."<br>"; ?>  
                                <?php echo "Date: ".$date."<br>"; ?>
                                <?php echo "Time: ".$db_time."<br> <br>"; ?>  


 <form action="" method="POST">
 
 Total Seat : <input type="number" name="total_seat_taken" required  max="<?php echo $db_total_seat ; ?>" min="1"><br><br>
 <h3>Payment Mode : </h3>
               Paytm : <input type="radio" name="payment" value="paytm" > <br>
               Net Banking : <input type="radio" name="payment" value= "net banking" > <br>
               By UPI : <input type="radio" name="payment" value="by upi" > <br><br>
               
              <input type="submit" name="submit" value="CONTINUE">

</form> 

<?php

$submit=$_POST['submit'];

$total_seat_taken=$_POST['total_seat_taken'];
$payment_mode=$_POST['payment'];

if(isset($submit))   // check submit is pressed or not 
{
    $submit=0;
   
    echo "Total seat booked : ".$total_seat_taken."<br>";
    echo "payment mode: ".$payment_mode."<br>";  
    
    $total_pay_amount=$total_seat_taken * $fare;
    
    echo "Total payable amount detail : ".$fare."*".$total_seat_taken." = ".$total_pay_amount."<br>";
    echo " <br> payable Amount(Rs.) : " .$total_pay_amount."  "."  ";
    
         // MAKE A SESSION OF EACH VARIABLES TO ACCESS ON NEXT PAGE  
        
         $_SESSION[username]=$username;     // creating session for that user  

         $_SESSION[source]=$source;             // creating session for that user  
         $_SESSION[destination]=$destination;             // creating session for that user  
         $_SESSION[bus_no]=$bus_no;             // creating session for that user  
        
        $_SESSION[total_seat_taken]=$total_seat_taken;             // creating session for that user     
        
        $_SESSION[fare]=$fare;             // creating session for that user     
         $_SESSION[date]=$date;             // creating session for that user     
         $_SESSION[time]=$time;             // creating session for that user               
           

         $_SESSION[username]=$username;     // creating session for that user  

          echo " <a href='confirm_paymnet_message.php'>Confirm Payment</a> ";  
}

?>

</html>


