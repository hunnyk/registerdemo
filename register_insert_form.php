<?php include("connect.php"); ?>
<?php include("header.php"); ?>


<section>
	<div class="container-fluid">
		<div class="row"> 
			<form id="regform" class="form-horizontal" method="post" action="register_insert_code.php" enctype="multipart/form-data">
				<div class="col-lg-12"><h1>Registration Form</h1></div>
				<div class="col-lg-6">
					<div class="form-group">
					    <label class="control-label col-lg-2" for="register_name">Name:</label>
					    <div class="col-lg-10">
					       <input type="text" class="form-control" id="register_name" name="register_name" placeholder="Enter Name">
					    </div>
					</div>					
					<div class="form-group">
					    <label class="control-label col-lg-2" for="register_add">Address:</label>
					    <div class="col-lg-10">
					       <input type="text" class="form-control" id="register_add" name="register_add" placeholder="Enter Address">
					    </div>
					</div>
					<div class="form-group">
					    <label class="control-label col-lg-2" for="gender">Gender:</label>
					    <div class="col-lg-10">
					       	<!-- <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter M or F"> -->
					       	<input type="radio" id="gender" name="gender" value="M">Male
                            <input type="radio" id="gender" name="gender" value="F">Female
                        </div>
					</div>
					<div class="form-group">
					    <label class="control-label col-lg-2" for="username">Username:</label>
					    <div class="col-lg-10">
					        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
					    </div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
					    <label class="control-label col-lg-2" for="email">Email:</label>
					    <div class="col-lg-10">
					       <input type="text" id="email" name="email" placeholder="Enter Email" class="form-control" >
					      
					    </div>
					</div>
					<div class="form-group">
					    <label class="control-label col-lg-2" for="password">Password:</label>
					    <div class="col-lg-10">
					       <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password">
					    </div>
					</div>
					<div class="form-group">
					    <label class="control-label col-lg-2" for="dob">DOB:</label>
					    <div class="col-lg-10">
					       <input type="text" class="form-control" id="dob" name="dob" placeholder="Enter DOB">
					    </div>
					</div>
					<div class="form-group">
					    <label class="control-label col-lg-2" for="phone">Phone:</label>
					    <div class="col-lg-10">
					       <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
					    </div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
					    <label class="control-label col-lg-2" for="profilepic">Profile Pic:</label>
					    <div class="col-lg-10">
					       <input type="file" class="form-control-file" id="profilepic" name="profilepic" placeholder="Enter Name">
					    </div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="form-group">
					    <div class="col-lg-offset-1 col-lg-10">
					       <input id="submit" type="submit" class="btn btn-primary" name='register_insert' value='Save'>
					    </div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- <script type="text/javascript">
	$(document).ready(function() {
	$('#submit').click(function(e) {
		var email = $('#email').val();
		var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if (!email.match(email_regex) || email.length == 0) {
		$('#p3').text("Pleaseemail: {
            //  	required: "Please enter email address",
            // }  enter a valid email address"); 
		$("#email").focus();
		return false;
		}
	});
});

</script> -->



<script type="text/javascript">
$(document).ready(function() {
	$.validator.addMethod("emailchar", function(value, element) 
	{ 
		return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
	}, "Please enter a valid email address");

	$.validator.addMethod("phonechar", function(value, element) 
	{ 
		return this.optional(element) || /^[0-9]{1,10}$/.test(value);
	}, "Please enter a minimum 10 digits");
	
    $("#regform").validate({
		rules: {
            register_name: "required",
            register_add: "required",
            email: {
                required: true,
                emailchar: true
            },
            phone: {
                required: true,
                number: true,
                phonechar:true
            },
            username: {
                required: true,
                minlength: 6
            },
            password: {
                required: true,
                minlength: 6
            },
            gender: "required",
            dob: "required" 
            	
		},
        messages: {
            register_name: "Please enter your name",
            register_add: "Please enter your address",
            // email: {
            //  	required: "Please enter email address",
            // } 
            phone: {
                required: "Please enter your phone number",
                number: "Please enter only numeric value"
            },
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 6 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            gender: "Please enter M or F",
            dob: "Please enter date of birth"
        }
    });
});

</script>

