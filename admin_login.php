<?php

session_start();

$username=$_POST[username];
$password=$_POST[password];

if($username && $password) 
{
   $connect=mysqli_connect("localhost","root","jay123@AS") or die("Error in connecting to local host");
                   
   mysqli_select_db($connect,"online_bus_booking") or die("ERROR in selecting data bases");     
   $query=mysqli_query($connect,"SELECT * FROM admin_login_detail WHERE username='$username'");

   $rows=mysqli_num_rows($query);  
  
   //   echo "TOTAL NO OF ROWS ="; 
   // echo $rows;
   
   if($rows!=0)                             
   {
     $check=0;
       while($temp_rows=mysqli_fetch_assoc($query))
      {
         $database_username=$temp_rows['username'];
         $database_password=$temp_rows['password'];
    
       if($username==$database_username && $password=="$database_password") // now check if username and password matched or not 
       {
         // echo "LOGIN SUCCESSFULL ! ";
         // echo "<br>";
           $check=1;                                        // means login successful
           echo "WELCOME  \n ";
           echo $username;
           
            // add action that admin will do 
           echo "<br> <br>ADD ROUTE : <a href='add_route_form.php'> Click</a>";
           echo "<br>UPDATE ROUTE : <a href='update.php'> Click </a>";
           echo "<br>CHANGE PASSWORD : <a href='change_password.php'> Click </a>";
           echo "<br>LOGOUT: <a href='logout.php'>click</a>";             
           
           $_SESSION[username]=$username;             // creating session for that user 
           
            break; 
       }               
      }
        if($check==0)                             // means not matched any password given by user from db
       echo "INCORRECT PASSWORD "; 
     
   }
   else
   {
   echo "ADMIN DOESN'T EXIST";
   }
      
}

else
    { echo "ENTER USERNAME AND PASSWORD BOTH";} 



?>
