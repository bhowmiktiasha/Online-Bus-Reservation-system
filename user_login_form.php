<html>
<title> USER LOGIN ! </title>
<style type="text/css">

#body
{
   background-color:c7c2d8;

}
h3
{
   text-align:center;
   margin-top:80;


}

#login
{
   margin-top:50;
   margin-left:450;
   
}
#login_button
{  margin-top:30;
   margin-left:190;
   font-size:22;
   background-color:#4121b0;
   color:white;
   
   

}


</style>




<body id="body" >

<h3> ! USER LOGIN PAGE ! </h3>
<div id=login>
<form action="user_login.php" method="POST">
        USERNAME<input type='text' name='username'> <br>
        PASSWORD<input type='password' name='password'> <br>
        <input id=login_button type='submit' value='login'>
</form>

</div>
</body>
</html>
