<?php
	include("connect.php");
?>

 
<?php

	$x=$_REQUEST['del'];
 	//$query="delete from registertb where register_id=$x";
 	$query="update registertb set isdelete=1 where register_id=$x";
 	//echo $query;exit;
	$retval=mysqli_query($con,$query);
		
	header('Location:register_home.php');
	
?>