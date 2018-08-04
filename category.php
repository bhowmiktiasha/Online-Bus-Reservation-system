<?php

session_start();
if($_SESSION['email']==""){
    header("location:index.php");
    }else{
include("connect.php"); 
 $email=$_SESSION["email"];
$query=mysql_query("select * from admin where userid='$email'");
$row=mysql_fetch_array($query);
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable();
} );

	</script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js">
	</script>
</head>

<body>
 <?php
 include('header.php');
 ?>
 <div class="container">
 <div class="row">
 <div class="panel panel-default">
  <div class="panel-heading">Manage Category</div>
  <div class="panel-body">
      <div class="col-md-12">
       <a data-toggle="modal" href="#myModal" class="btn btn-danger">Add Category</a>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Category</h4>
        </div>
        <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
  
  <input type="text" name="category" placeholder="add category" class="form-control" id="usr">
  </div>

<div class="form-group">
<input type="submit" name="submit" class="btn btn-danger">
</div>
<?php 
$msg="";
	include('connect.php');
	if(isset($_POST['submit']))
	{
		$name=$_POST['category'];		
		
		$qry=mysql_query("insert into add_category(category)values('$name')");
		if($qry)
		{
		
		$msg="Succussfully Added";
		header("Refresh:0");
		}
		else
		{
		$msg="Error"	;	
		}
		
	}

?>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
       
       
       
       
       
       <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Category Name</th>
                <th>Option</th>
              
                
            </tr>
        </thead>
        
        <tbody>
        <?php
include('connect.php');
$sql=mysql_query("select * from add_category");
$i=1;
while($row=mysql_fetch_array($sql))
{
	 $id=$row['id'] ;
	 $cname=$row['category'];

?>
            <tr>
                
                
    <td><?php echo $i++ ?></td>
<td><?php echo $cname ?></td>  
<td><a href="#myModalRemarks<?php echo $id ?>" class="btn btn-success" data-toggle="modal">Update</a></td> 
      

            </tr>
            <div class="modal fade" id="myModalRemarks<?php echo $id ?>" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $id; ?> Remarks</h4>
            </div>
            <div class="modal-body">
               
                  <form action="" method="post">
   
       <div class="form-group">
    

    <input type="text" name="category" class="form-control" value="<?php echo $cname; ?>"  required>
    <input type="hidden" name="l" value="<?php echo $c=$id; ?>">
  </div>
  
  <div class="form-group">
     <button type="submit" name="updatecat" class="btn btn-primary"><?php echo $c=$id; ?> Submit</button>
  </div>
  <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
<?php
include('connect.php');
if(isset($_POST['updatecat']))
{
$a=$_POST['category'];
$l=$_POST['l'];

$qry=mysql_query("Update add_category set category='$a' where id='$l'");
    if($qry)
    {
    
    $msg="Succussfully Added";
    header("Refresh:0");
    }
    else
    {
    $msg="Error"  ; 
    }
}


?>


  </form>
            </div>
            
        </div>
   </div>
</div>
            
        <?php      
     }
?>       
            
        </tbody>
    </table>
       
       
       
      </div>
      
  </div>
</div>
 </div>
 </div>





</body>
</html>