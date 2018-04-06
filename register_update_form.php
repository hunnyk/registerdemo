<?php
    session_start();
?>
<?php include("connect.php"); ?>
<?php include("header.php"); ?>

<?php

		$i=$_REQUEST['upd'];
		$_SESSION['i']=$i;
		
		$query="select * from registertb where register_id='$i'";
		$retval=mysqli_query($con,$query);
		
		while($row=mysqli_fetch_array($retval))
		{
?>

<section>
	<div class="container-fluid">
		<div class="row"> 
			<form name="regupdateform" method="post" class="form-horizontal" action="register_update_code.php" enctype="multipart/form-data">
				<div class="col-lg-12"><h1>Registration Form</h1></div>
				<div class="col-lg-6">
					<div class="form-group">
						<input type="hidden" name="register_id" value="<?php echo $_GET['upd']?>">
						<label class="control-label col-lg-2" for="register_name">Name:</label>
						<div class="col-lg-10">
						    <input type="text" class="form-control" id="register_name" name="register_name" placeholder="Enter Name" value="<?php echo $row['register_name']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-2" for="register_add">Address:</label>
						<div class="col-lg-10">
						    <input type="text" class="form-control" id="register_add" name="register_add" placeholder="Enter Address" value="<?php echo $row['register_add']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-2" for="gender">Gender:</label>
						<div class="col-lg-10">
						    <!-- <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter M or F" value="<php echo $row['gender']; ?>"> -->
						    <input type="radio" name="gender" value="M"<?php if(isset($row['gender']) && ($row['gender'])=="M" ) { echo 'checked'; } ?> >
                            <label>Male</label>
                            <input type="radio" name="gender" value="F"<?php if(isset($row['gender']) && ($row['gender'])=="F" ) { echo 'checked'; } ?> >
                            <label>Female</label>
						</div>
					</div>
				    <div class="form-group">
						<label class="control-label col-lg-2" for="username">Username:</label>
						<div class="col-lg-10">
						       <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" value="<?php echo $row['username']; ?>">
						</div>
				    </div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
					    <label class="control-label col-lg-2" for="email">Email:</label>
					    <div class="col-lg-10">
					        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?php echo $row['email']; ?>">
					    </div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-2" for="password">Password:</label>
						<div class="col-lg-10">
						    <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" value="<?php echo $row['password']; ?>">
						</div>
					</div>
					<div class="form-group">
					    <label class="control-label col-lg-2" for="dob">DOB:</label>
					    <div class="col-lg-10">
					       <input type="text" class="form-control" id="dob" name="dob" placeholder="Enter DOB" value="<?php echo $row['dob']; ?>">
					    </div>
					</div>
						<div class="form-group">
						    <label class="control-label col-lg-2" for="phone">Phone:</label>
						    <div class="col-lg-10">
						       <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="<?php echo $row['phone']; ?>">
						    </div>
						</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label class="control-label col-lg-2" for="profilepic">Profile Pic:</label>
							<div class="col-lg-10">
							    <input type="file" class="form-control-file" id="profilepic" name="profilepic" value="<?php echo $row['profilepic']; ?>" >
									<?php echo $row['profilepic']; ?>
								<img src="<?php echo $row['profilepic']; ?>"  height="50" width="50">
							</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="form-group">
						<div class="col-lg-offset-1 col-lg-10">
							<input type="submit" class="btn btn-primary" name='register_update' value='Save'>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<?php } ?>