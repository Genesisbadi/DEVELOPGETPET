]<?php 
session_start();
include('C:\xampp\htdocs\GETPET\includes\config.php');
if(isset($_POST['insert']))
{

$OrganizationNameOrFirstname=($_POST['OrganizationName']);
$OrganizationManagerOrLastname=($_POST['OrganizationManager']);
$Logo=addslashes(file_get_contents($_FILES["Logo"]["tmp_name"])) ;
$AccountContactNo=($_POST['ContactNo']);
$AccountAddress=($_POST['Address']);
$AccountEmail=($_POST['Email']);
$AccountUsername=($_POST['Username']);
$AccountPassword=($_POST['Password']);
$sql="INSERT INTO registered(OrganizationNameOrFirstname,OrganizationManagerOrLastname,Image,ContactNo,Address,Email,Username,Password,Role,Date)VALUES(:Firstname,:Lastname,:Logo,:ContactNo,:Address,:Email,:Username,:Password,'Animal Welfare Agency',Now())";
$query=$dbh->prepare($sql); 
$query->bindParam(':Firstname',$OrganizationNameOrFirstname,PDO::PARAM_STR);
$query->bindParam(':Lastname',$OrganizationManagerOrLastname,PDO::PARAM_STR);
$query->bindParam(':Logo',$Logo,PDO::PARAM_STR);
$query->bindParam(':ContactNo',$AccountContactNo,PDO::PARAM_STR);
$query->bindParam(':Address',$AccountAddress,PDO::PARAM_STR);
$query->bindParam(':Email',$AccountEmail,PDO::PARAM_STR);
$query->bindParam(':Username',$AccountUsername,PDO::PARAM_STR);
$query->bindParam(':Password',$AccountPassword,PDO::PARAM_STR);
$query->execute();

$sql2="SELECT ID FROM registered ORDER BY ID DESC";
$query2=$dbh->prepare($sql2);
$query2->execute();

$ID=$query2->fetchColumn();


$OrganizationName=($_POST['OrganizationName']);
$OrganizationManager=($_POST['OrganizationManager']);
$Logo=addslashes(file_get_contents($_FILES["Logo"]["tmp_name"])) ;
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);
$sql1="INSERT INTO animal_welfare_agency(ID,OrganizationName,OrganizationManager,Logo,ContactNo,Address,Email,Username,Password,Role)VALUES($ID,:OrganizationName,:OrganizationManager,:Logo,:ContactNo,:Address,:Email,:Username,:Password,'Animal Welfare Agency')";
$query1=$dbh->prepare($sql1); 
$query1->bindParam(':OrganizationName',$OrganizationName,PDO::PARAM_STR);
$query1->bindParam(':OrganizationManager',$OrganizationManager,PDO::PARAM_STR);
$query1->bindParam(':Logo',$Logo,PDO::PARAM_STR);
$query1->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query1->bindParam(':Address',$Address,PDO::PARAM_STR);
$query1->bindParam(':Email',$Email,PDO::PARAM_STR);
$query1->bindParam(':Username',$Username,PDO::PARAM_STR);
$query1->bindParam(':Password',$Password,PDO::PARAM_STR);
$query1->execute();

$OrganizationNameOrFirstname=($_POST['OrganizationName']);
$OrganizationManagerOrLastname=($_POST['OrganizationManager']);
$Logo=addslashes(file_get_contents($_FILES["Logo"]["tmp_name"])) ;
$AccountContactNo=($_POST['ContactNo']);
$AccountAddress=($_POST['Address']);
$AccountEmail=($_POST['Email']);
$AccountUsername=($_POST['Username']);
$AccountPassword=($_POST['Password']);
$sql3="INSERT INTO login(ID,OrganizationNameOrFirstname,OrganizationManagerOrLastname,Image,ContactNo,Address,Email,Username,Password,Role)VALUES($ID,:OrganizationName,:Lastname,:Logo,:ContactNo,:Address,:Email,:Username,:Password,'Animal Welfare Agency')";
$query3=$dbh->prepare($sql3); 
$query3->bindParam(':OrganizationName',$OrganizationNameOrFirstname,PDO::PARAM_STR);
$query3->bindParam(':Lastname',$OrganizationManagerOrLastname,PDO::PARAM_STR);
$query3->bindParam(':Logo',$Logo,PDO::PARAM_STR);
$query3->bindParam(':ContactNo',$AccountContactNo,PDO::PARAM_STR);
$query3->bindParam(':Address',$AccountAddress,PDO::PARAM_STR);
$query3->bindParam(':Email',$AccountEmail,PDO::PARAM_STR);
$query3->bindParam(':Username',$AccountUsername,PDO::PARAM_STR);
$query3->bindParam(':Password',$AccountPassword,PDO::PARAM_STR);
$query3->execute();

echo '<script>alert("Registered Successfully!!!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/GETPET/web/Dashboard.php'</script>";
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
                <form class="login100-form validate-form" method="post" enctype="multipart/form-data"> 
                <div style="text-align:left;margin-top:-50px;margin-bottom:20px;margin-left:-40px;cursor: pointer;"><a onclick="history.back()" class="signup-image-link" ><u><-Back</u></a></div>
					      <p style="text-align:center;"><img src="images/Logo/Logo.png" style="width:250px;height:250px;margin-top:-80px;" alt=" " class="img-responsive"/></p>
                    <h2 style="text-align:center;margin-top:-40px;">Animal Welfare Agency</h2>
					<br>
					<div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="OrganizationName" required="required" placeholder="Organization Name">
					</div><br>
          <div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="OrganizationManager" required="required" placeholder="Organization Manager">
						<span class="focus-input100"></span>
					</div><br>
          <div style="text-align: center" class="wrap-input100 validate-input">
                        <a style="margin-left:-160px;">Upload Logo</a><br><br>
                        <input type="file" name="Logo" id="Logo" 
                        style="width:250px;height:40px;border:none;" placeholder="Upload Logo">
					</div><br>
                    
					<div  style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;font-family:Arial;" type="text" name="ContactNo" onkeypress="isInputNumber(event)" maxlength="11" placeholder="Contact No.">
						<script>
            
                        function isInputNumber(evt){
                
                        var ch = String.fromCharCode(evt.which);
                
                        if(!(/[0-9]/.test(ch))){
                        evt.preventDefault();
                       }
					}
                    </script>
					</div><br>
					<div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Address" required="required" placeholder="Address">
					</div><br>
					<div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Email" required="required" placeholder="Email">
					</div><br>
          <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Username" required="required" placeholder="Username">
					</div><br>
					<div  style="text-align: center" class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="password" name="Password" required="required" placeholder="Password">
					</div><br><br>
					<div style="text-align: center">
						<button  class="login100-form-btn" style="background-color:#00cdc1;width:250px;height:40px;border:none;" name="insert" type="submit" id="insert" value="Insert">
							<a style="color:White"> Register </a>
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