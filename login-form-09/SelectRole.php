<?php 
session_start();
include('C:\xampp\htdocs\GETPET\includes\config.php');
if(isset($_POST['PetOwner']))
{
	
   echo "<script type ='text/javascript'> document.location='http://localhost/GETPET/login-form-09/PetOwnerRegistration.php'</script>";

}
if(isset($_POST['PetAdopter']))
{
	
   echo "<script type ='text/javascript'> document.location='http://localhost/GETPET/login-form-09/PetAdopterRegistration.php'</script>";

}
if(isset($_POST['AnimalWelfareAgency']))
{
	
   echo "<script type ='text/javascript'> document.location='http://localhost/GETPET/login-form-09/AnimalWelfareAgencyRegistration.php'</script>";

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
					<p style="text-align:center;"><img src="images/Logo/Logo.png" style="width:250px;height:250px;margin-top:-60px;" alt=" " class="img-responsive"/></p>
					<h2 style="text-align:center;margin-top:-40px;">Select Role:</h2>
					<br>
                <div style="text-align: center">
						    <button class="login100-form-btn" style="background-color:#00cdc1;width:250px;height:40px;border:none;" name="PetOwner">
							  <a style="color:White">Pet Owner</a>
						    </button>
					      </div><br>
                <div style="text-align: center">
						    <button class="login100-form-btn" style="background-color:#00cdc1;width:250px;height:40px;border:none;" name="PetAdopter">
							  <a style="color:White">Pet Adopter</a>
						    </button>
					      </div><br>
                <div style="text-align: center">
						    <button class="login100-form-btn" style="background-color:#00cdc1;width:250px;height:40px;border:none;" name="AnimalWelfareAgency">
							  <a style="color:White">Animal Welfare Agency</a>
						    </button>
					      </div><br>
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