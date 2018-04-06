<?php
	include("connect.php");
?>
<?php 
	include("header.php");
?>
<?php 
	$query="select * from registertb WHERE isdelete = 0";
?>
<div class="container">
	<div class="row"> 
		<div class="col-lg-12"><h1>Registration List</h1></div>
		<div class="col-lg-12">
			<form name='f2' method='post' action='register_insert_form.php'>
				<div class="form-group">
					<input type='submit' class="btn btn-primary" name='register_insert' value='Add new record'>
				</div>
			</form>
		</div>
		<div class="col-lg-12">
			<form name='register_home' class="form-horizontal" method='post' action="register_delete_code.php" enctype='multipart/data-form'>
				<div class="table-responsive">
				<div style="overflow-x:auto;">
					<table class="table table-hover">                                	
						<tr>									
							<th>Name</th>
							<th>Address</th>
							<th>Gender</th>
							<th>Username</th>
							<th>Email</th>
							<th>Password</th>
							<th>DOB</th>
							<th>Phone</th>
							<th>ProfilePic</th>
							<th>Edit</th>
							<th>Delete</th>	
						</tr> 
						<?php
							$result=mysqli_query($con,$query);
							while($row=mysqli_fetch_array($result))
							{
								$id=$row['register_id'];
							
								echo "<tr><td>".$row['register_name']."</td>";
								echo "<td>".$row['register_add']."</td>";
								echo "<td>".$row['gender']."</td>";
								echo "<td>".$row['username']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['password']."</td>";
								echo "<td>".$row['dob']."</td>";
								echo "<td>".$row['phone']."</td>";
								?>

								<td><center><img src="<?php echo $row['profilepic']; ?>"  height='50px' width='50px'/></center></td>

								<?php 

									echo "<td><a href='register_update_form.php?upd=$id'>Edit</a></td>";
									echo "<td><a href='register_delete_code.php?del=$id'>Delete</a></td></tr>";
							}	
						?>

						<tr>
							<td></td>
						</tr>
					</table>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>