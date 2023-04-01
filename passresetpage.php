<?php
session_start();
if(isset($_SESSION['email'])== ''){

    header("location: forget.php");
}
if(isset($_SESSION['email'])){

    $email = $_SESSION['email'];
}else

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>

    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="stylesheet/index.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="stylesheet/sample.css">
</head>
<body>
<nav class="navbar-light" style="background-color: white; box-shadow:  0px 0px 15px 0px #000000;">
<p style="color: #f28741; font-size:30px; text-align:center;">
<a href="index.php">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#f28741" class="bi bi-arrow-left-short" viewBox="0 0 16 16" style="float: left; margin-top:10px;">
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg></a>

<img src="img/logo.png"  alt="" width="50" height="44" class="d-inline-block align-text-top" style="float: left;" ><b>Password Reset</b></p>    
<div>
</nav>
<div class="container d-flex flex-column" style="color: #f28741;" >
  <div class="row align-items-center justify-content-center min-vh-100 g-0" >
    <div class="col-12 col-md-8 col-lg-4 border-top border-3 border-warning" style="border-color: #f28741;" >
      <div class="card shadow-sm" style="background-color: white;">
        <div class="card-body">
          <div class="mb-4">
            <h5>Password Change</h5>
          </div>
          <form action="otpverify.php?email=<?php echo $email; ?>" method="post">
          <div>
    <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741; text-align: center;" type="password" class="form-control check_email_value " placeholder="password" id="email" name="pass"  required>
    <br>
    <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741; text-align: center;" type="password" class="form-control check_email_value " placeholder="confirm password" id="email" name="cpass"  required>
  </div>
  <br>
            <div class="mb-3 d-grid">
            <button type="submit" name="passwordchange"  class="btn btn-warning" style="background-color: #f28741; color:white;" data-bs-toggle="modal"  role="button">Reset Password</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>



<?php


unset($_SESSION['email']);
session_destroy();
?>