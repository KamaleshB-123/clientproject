<?php error_reporting(0);
session_start();
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
            <h5>Forgot Password?</h5>
            <p class="mb-2">Enter your registered email ID to reset the password
            </p>
          </div>
          <form action="otpverify.php" method="post">
          <div>
 
    <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741; text-align: center;" type="Email" class="form-control check_email_value " placeholder="email" id="email" name="email"  required>
    <small class="error_email" style="color: red;"></small>
  </div>
  <br>
            <div class="mb-3 d-grid">
            <button type="submit" name="sendotp" id="otpsubmit" onclick= "otpdialogbox()" class="btn btn-warning" style="background-color: #f28741; color:white;" data-bs-toggle="modal"  role="button">Reset Password</button>
            
            </div>
            <span>Don't have an account? Move to home for login and registration <a href="index.php" style="background-color: #f28741; color:white;" class="btn btn-warning" >Home</a></span>
          </form>

          <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" >
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content" >
     
      <div class="modal-body" >
      <form action="otpverify.php?email=<?php echo  $_SESSION['email'];?>" method="post" class="rounded bg-white shadow p-5" >
					<h3 class="text fw-bolder fs-4 mb-2"  style="color: #f28741;" >Two Step Verification</h3>

					<div class="fw-normal text mb-4"  style="color: #f28741;">
						Enter the verification code we sent to
					</div>  

                    <div class="d-flex align-items-center justify-content-center fw-bold mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                        </svg>
                        <span>8459</span>
                    </div>

					<div class="otp_input text-start mb-2">
                        <label for="digit">Type your 6 digit security code</label>
						<div class="d-flex align-items-center justify-content-between mt-2">
            <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741; text-align: center;" type="tel" class="form-control " placeholder="OTP" id="validationDefault02" name="otpnumber"  required>
                            
                        </div> 
					</div>  

					<button  type="submit" class="btn btn-warning submit_btn my-4" name="otpverification"  style="background-color: #f28741; color:white;">Verify  </button> 
          </form>
          <form action="otpverify.php?email=<?php echo  $_SESSION['email']; ?>" method="post">
                    <div class="fw-normal text-muted mb-2">
						Didn’t get the code ? <button  type="submit" name="resend"   class="text fw-bold text-decoration-none" style="color: #f28741;border: none;" >Resend</button>
					</div>
          </form>
      </div>
     
    </div>
  </div>
</div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php
if($_SESSION['otpbox'])
{

?>
<script>
const get = document.getElementById('otpsubmit');
get.setAttribute('href', "#exampleModalToggle");
get.click();

alert("Otp is Sent Check your mail")

</script>
<?php
}
?>

<?php
if($_SESSION['otpwrong'])
{

?>
<script>
alert("Otp is wrong try again")
</script>
<?php
}
?>

<?php
  unset($_SESSION['otpbox']);
  unset($_SESSION['otpwrong']);
?>


<script>
  $(document).ready(function(){
    $('.check_email_value').keyup(function(e){
      var email = $('.check_email_value').val();
      $.ajax({
        type: "POST",
        url: "otpverify.php",
        data:{
          "check_sub_btn" : 1,
          "email_id" : email
        },
        success : function(response)
        {
          //alert(response);
          $('.error_email').text(response);
        }
      });
    });
  });
</script>

<?php
  session_destroy();
  exit();
?>