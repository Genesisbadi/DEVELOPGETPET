<?php 
session_start();
include('C:\xampp\htdocs\GETPET\includes\config.php');
if(isset($_POST['login']))
{
	$Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $sql = "SELECT * FROM admin WHERE Email = :Email AND Password =:Password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':Email', $Email,PDO::PARAM_STR);
    $query->bindParam(':Password', $Password,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    

    if($query->rowCount()>0)
    {

        session_regenerate_id();
		$_SESSION['ID'] = $results['ID'];

        echo '<script>alert("Login Successfully!!!")</script>';
        echo "<script type ='text/javascript'> document.location='http://localhost/GETPET/web/AdminDashboard.php'</script>";


    }

    $sql1 = "SELECT * FROM pet_owner_rescuer WHERE Email = :Email AND Password =:Password";
    $query1 = $dbh->prepare($sql1);
    $query1->bindParam(':Email', $Email,PDO::PARAM_STR);
    $query1->bindParam(':Password', $Password,PDO::PARAM_STR);
    $query1->execute();
    $results1=$query1->fetch(PDO::FETCH_ASSOC);
    

    if($query1->rowCount()>0)
    {

        session_regenerate_id();
		$_SESSION['ID'] = $results1['ID'];
		$_SESSION['Firstname'] = $results1['Firstname'];
        $_SESSION['Laststname'] = $results1['Laststname'];

        echo '<script>alert("Login Successfully!!!")</script>';
        echo "<script type ='text/javascript'> document.location='http://localhost/GETPET/web/PetOwnerOrRescuerDashboard.php'</script>";


    }


	else 
    echo '<script>alert("Invalid Account!!!")</script>';
	



}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>GetPet</title>
    <style>
     .content{
      text-align: center;
      margin-top: -90px;
     }
     body {
      background-image: url('2.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;
}
    </style>
  </head>
  <body>
  
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                <form class="login100-form validate-form" method="post">
                <div style="text-align:left;margin-top:-50px;margin-bottom:20px;margin-left:-40px;cursor: pointer;"><a onclick="history.back()" class="signup-image-link" ><u><-Back</u></a></div>
					      <p style="text-align:center;"><img src="images/Logo/Logo.png" style="width:250px;height:250px;margin-top:-80px;" alt=" " class="img-responsive"/></p>
					      <h2 style="text-align:center;margin-top:-60px;margin-bottom:30px;">Sign In to <strong>GetPet</strong></h2>
					      <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						    <input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Email"  required="required" placeholder="Email">
					      </div>
					      <br>
					      <div  style="text-align: center" class="wrap-input100 validate-input" data-validate="Password is required">
						    <input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="password" name="Password" placeholder="Password" required="required" autocomplete="off">
					      </div><br>
					      <div style="text-align: center" class="flex-sb-m w-full p-t-3 p-b-32">
						    <div class="contact100-form-checkbox">
							  <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							  <label class="label-checkbox100" for="ckb1">
								Remember me
							  </label>
						    </div>
				 	      </div><br>
					      <div style="text-align: center">
						    <button  class="login100-form-btn" style="background-color:#00cdc1;width:250px;height:40px;border:none;" name="login">
							  <a style="color:White"> Login </a>
						    </button>
					      </div>
                <div class="text-center" style="margin-top: 25px;">
                        <a href="http://localhost/GETPET/login-form-09/SelectRole.php" class="signup-image-link" ><u>Create an account</u></a>
                    </div>
	                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>