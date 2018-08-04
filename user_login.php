<?php

session_start();

//$username=$_SESSION[username];

?>

<html>

<head>

<link rel="stylesheet" type="text/css" href="user_login.css"/>


</head>

<body>



<?php


    if(isset($_SESSION[username]))
 {    
                $username=$_SESSION[username];
?>
       <div id="upper_part">
       
       
                <h3 id="welcome">WELCOME <?php echo $username ?> </h3>
                <h2 id="upper_between">TU BUS SERVICE SERVICES </h2>
                <h3 id="logout"> <?php echo "<a href='logout.php'>LOGOUT</a>"; ?> </h3> 
                  
       </div>
              
          
     <div id="search">
  
           <?php
                 // add action that admin will do 
                   echo "<br>SEARCH  AND BOOK BUSHES : <a href='search_bushes.php'> Click</a>";          
           
                  $_SESSION[username]=$username;             // creating session for that user 
            ?>         
     </div>
     
     <?php
        
                  //  session_name($username);
  }
  
    else
 {  
        $username=$_POST[username];
        $password=$_POST[password];

           if($username && $password) 
        {
                $connect=mysqli_connect("localhost","root","jay123@AS") or die("Error in connecting to local host");
                   
                mysqli_select_db($connect,"online_bus_booking") or die("ERROR in selecting data bases");     
                $query=mysqli_query($connect,"SELECT * FROM users_login_detail WHERE username='$username'");

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
      ?>           
          <div id="upper_part">
       
       
                 <h3 id="welcome">WELCOME <?php echo $username ?> </h3>
                 <h2 id="upper_between">TU BUS SERVICE SERVICES </h2>
                 <h3 id="logout"> <?php echo "<a href='logout.php'>LOGOUT</a>"; ?> </h3> 
                  
          </div>
                 
        <?php
                 $_SESSION[username]=$username;             // creating session for that user 
      
                  $check=1;                                        // means login successful
              
            //     echo "WELCOME ";
              //   echo $username;
           
                 // add action that admin will do 
                  echo "<br> <br>SEARCH  AND BOOK BUSHES : <a href='search_bushes.php'> Click</a>";
               //  echo "<br>LOGOUT: <a href='logout.php'>click</a>";             
           
                  $_SESSION[username]=$username;             // creating session for that user 
        
                  //  session_name($username);
           
                     break; 
               }               
            }
        
                 if($check==0)                             // means not matched any password given by user from db
                 echo "INCORRECT PASSWORD "; 
     
        }
           else
            echo "USER DOESN'T EXIST";
   
              $_SESSION[username]=$username;             // creating session for that user     
     }

       else
        echo "ENTER USERNAME AND PASSWORD BOTH"; 
   }


?>

</body>
</html>
