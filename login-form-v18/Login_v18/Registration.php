<?php 
session_start();
include('C:\xampp\htdocs\GETPET\includes\config.php');
if(isset($_POST['submit']))
{
$role=($_POST['role']);

if ($role == 'user') 
{
$Fname=($_POST['Fname']);
$Lname=($_POST['Lname']);
$Email=($_POST['Email']);
$Password=($_POST['Password']);
$sql="INSERT INTO user(Fname,Lname,Email,Password,roleID)VALUES(:Fname,:Lname,:Email,:Password,1)";
$query=$dbh->prepare($sql); 
$query->bindParam(':Fname',$Fname,PDO::PARAM_STR);
$query->bindParam(':Lname',$Lname,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':Password',$Password,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Registered Successfully!!!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/GETPET/login-form-v18/Login_v18/Login.php'</script>";
}
else if ($role == 'admin')
{
$Fname=($_POST['Fname']);
$Lname=($_POST['Lname']);
$Email=($_POST['Email']);
$Password=($_POST['Password']);
$sql="INSERT INTO admin_registration_confirmation(AdFname,AdLname,Email,Password,roleID)VALUES(:Fname,:Lname,:Email,:Password,2)";
$query=$dbh->prepare($sql); 
$query->bindParam(':Fname',$Fname,PDO::PARAM_STR);
$query->bindParam(':Lname',$Lname,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':Password',$Password,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Wait for the confirmation of the Admin!!!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/GETPET/login-form-v18/Login_v18/Login.php'</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-0">
                    <h1 style="margin-top: -150px;"> Registration </h1>
					</span>
					
					<div class="wrap-input100 validate-input" style="margin-top: 25px;" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="Fname">
						<span class="focus-input100"></span>
						<span class="label-input100">Firstname</span>
					</div>

                    <div class="wrap-input100 validate-input" style="margin-top: 25px;" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="Lname">
						<span class="focus-input100"></span>
						<span class="label-input100">Lastname</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="Email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="Password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

                    <div class="form-group">
                      <label for="default" class="col-sm-5 control-label">Role</label>
                        <div class="col-sm-5" style="margin-top: 20px;">
                         <input type="radio" name="role" value="user" required="required" checked="">User <br>
                         <input type="radio" name="role" value="admin" required="required">Admin 
                        </div>
                    </div>
			
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Register
						</button>
					</div>
					<div class="text-center" style="margin-top: 25px;">
                        <a href="http://localhost/GETPET/login-form-v18/Login_v18/Login.php" class="signup-image-link" ><u>Back to Login Page</u></a>
                    </div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/cat-dog-indoors.jpg'); background-size: 130% 100%">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>