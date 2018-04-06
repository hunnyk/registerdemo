<?php
include("connect.php");
?>

<?php

if(isset($_REQUEST['register_insert']))
{

	$register_name=$_REQUEST['register_name'];
	$register_add=$_REQUEST['register_add'];
	$gender=$_REQUEST['gender'];
	$username=$_REQUEST['username'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$dob=$_REQUEST['dob'];
	$phone=$_REQUEST['phone'];
	$profilepic=$_REQUEST['profilepic'];

	if(file_exists("upload/" . $_FILES["profilepic"]["name"]))
	{
        echo $_FILES["profilepic"]["name"] . " is already exists.";
    } 
    else
    {
        move_uploaded_file($_FILES["profilepic"]["tmp_name"], "upload/".$_FILES["profilepic"]["name"]);
    } 
    
	// vupload=move_uploaded_file($_FILES['profilepic']['name'],'upload/'.$_FILES['profilepic']['name']);
    // exit;

	$path='upload/'.$_FILES['profilepic']['name'];

	$query="insert into registertb (register_name,register_add,gender,username,email,password,dob,phone,profilepic) values ('$register_name','$register_add','$gender','$username','$email','$password','$dob','$phone','$path')";
	//echo $query;exit;
	$retval=mysqli_query($con,$query);

	header('location:register_home.php');
}


?>