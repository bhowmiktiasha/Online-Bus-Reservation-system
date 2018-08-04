<html>
<head>
<title>
Admin Page
</title>
<style>
div.form-group
{
margin-left:200px;
height:700px;
width:350px;
border:#996600;
}
#div
{
margin-left:200px;
height:650px;
width:350px;
border-bottom-color:#333333;
}
</style>
<body>
<div id="div" align="center">
<div class="form-group">
<table bgcolor="#CCCCCC"; border="1" bordercolor="#000000" bordercolorlight="#9900CC" bordercolordark="#990066" height="650px" width="600px">
<tr><th><font size="+1">Admin page</font></th></tr>
<form name="admin" method="post">
   <tr><th><label for="user">USER ID:</label>
   <input type="text" class="form-control" id="user" name="u1"></th></tr>
   <tr><th><label for="num">Password:</label>
   <input type="password" class="form-control" id="num" name="u2"></th></tr>
    <tr><th><button style="background-color:#00CC33; border-bottom-color:#660000; width:100%; height:50px;"type="submit" class="btn btn-default" name="save"><font size="+1">Log In</font></button></th></tr>
     <tr><th><button style="background-color:#00CC33; border-bottom-color:#660000; width:100%; height:50px;"type="submit" class="btn btn-default" name="back"><font size="+1"><a href="../index.php">Back To Home Page</a></font></button></th></tr></table>  
</div>
</div>
</div>
</body>
</html>