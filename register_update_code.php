<?php
      session_start();
?>
<?php
	include("connect.php");
?>
<?php

		$i=$_REQUEST['register_id'];
		$register_name=$_REQUEST['register_name'];
		$register_add=$_REQUEST['register_add'];
		$gender=$_REQUEST['gender'];
		$username=$_REQUEST['username'];
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		$dob=$_REQUEST['dob'];
		$phone=$_REQUEST['phone'];
		
	if( (isset($_FILES['profilepic']['size'])) && $_FILES['profilepic']['size'] > 0)
	{
		$mvupload=move_uploaded_file($_FILES['profilepic']['tmp_name'],'upload/'.$_FILES['profilepic']['name']);
		$path='upload/'.$_FILES['profilepic']['name'];
		$query="update registertb set register_name='$register_name',register_add='$register_add',gender='$gender',username='$username',email='$email',password='$password',dob='$dob',phone='$phone',profilepic='$path' where register_id='$i'"; 
	}	
   	else
	{
		$query="update registertb set register_name='$register_name',register_add='$register_add',gender='$gender',username='$username',email='$email',password='$password',dob='$dob',phone='$phone' where register_id='$i'";
	}
	// /echo $query;exit;
	$retval=mysqli_query($con,$query);			  
	header('location:register_home.php');		
	
	
	
?>