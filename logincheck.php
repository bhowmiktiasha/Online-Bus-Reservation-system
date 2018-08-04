<?php
ob_start();
include("connect.php");


 $email=mysql_real_escape_string( $_POST['userid'] );
 $password=mysql_real_escape_string ($_POST['password'] );
 
 $rs2=mysql_query("SELECT * from `admin` WHERE " .    
               "userid='" . $email . "' AND " .           
               "password='" . $password . "'" ,$con) or die(mysql_error());
if(mysql_num_rows($rs2)< 1)
        {
    	echo"<script>alert('Invalid Username or Password. Please try again');</script>";
    	echo"<script>window.history.back()</script>";
        }
        else
        {
         $rs2=mysql_query("select * from admin where userid='$email' and password='$password'",$con) or die(mysql_error());
         $result1=mysql_query($rs2);
    	 session_start();
	     $_SESSION["email"]="$email";
         header("Location:admin-profile.php");
        }
