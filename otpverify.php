<?php
include("dbconfig.php");
session_start();
ob_start();
//email check
if(isset($_POST["check_sub_btn"]))
{
    $email = $_POST["email_id"];
    $email_query = "SELECT * FROM register WHERE Email = '$email' ";
    $email_query_run = mysqli_query($con, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        echo "Email is correct ,Enter the reset button";
    }
    else
    {
        echo "Email id is not available , Please enter Correct email";
    }
}




?>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
  if(isset($_POST['sendotp'])=='POST'){
    echo $_POST['email'];
    $_SESSION['otpbox'] = 1;

    $user_email = $_POST['email'];
$otp = rand(111111,999999);
echo $otp;
$otp_update = "UPDATE register SET otp = '$otp' WHERE  Email = '$user_email' ";
mysqli_query($con, $otp_update);

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kamalesh944555@gmail.com';                     //SMTP username
    $mail->Password   = 'zbuehdhddnwvkhxa ';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kamalesh944555@gmail.com', 'Kamalesh');
    $mail->addAddress($user_email);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'Password Reset otp: ' .$otp;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Message has been sent';
    $_SESSION['email'] = $user_email;
    header("location: forget.php");
    ob_end_flush();
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

  }
 
}
// resend email
if(isset($_POST['resend'])=='POST'){
  echo $_GET['email'];
  $_SESSION['otpbox'] = 1;

  $user_email = $_GET['email'];
$otp = rand(111111,999999);
echo $otp;
$otp_update = "UPDATE register SET otp = '$otp' WHERE  Email = '$user_email' ";
mysqli_query($con, $otp_update);

$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = 2;                      
  $mail->isSMTP();                                            
  $mail->Host       = 'smtp.gmail.com';                     
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'kamalesh944555@gmail.com';                     //SMTP username
  $mail->Password   = 'zbuehdhddnwvkhxa ';                               //SMTP password
  $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom('kamalesh944555@gmail.com', 'Kamalesh');
  $mail->addAddress($user_email);     //Add a recipient
  // $mail->addAddress('ellen@example.com');               //Name is optional
  // $mail->addReplyTo('info@example.com', 'Information');
  // $mail->addCC('cc@example.com');
  // $mail->addBCC('bcc@example.com');

  //Attachments
  // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Here is the subject';
  $mail->Body    = 'Password Reset otp: ' .$otp;
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  $mail->send();
  echo 'Message has been sent';
  $_SESSION['email'] = $user_email;
  header("location: forget.php");
  ob_end_flush();
    exit();
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}

}

?>


<?php
if(isset($_POST['otpverification']) == 'POST'){
$otp_num  = $_POST['otpnumber'];
$otp_query = "SELECT * FROM register WHERE otp = '$otp_num' ";
$otp_query_run = mysqli_query($con, $otp_query);
if(mysqli_num_rows($otp_query_run) > 0){
  while($row=mysqli_fetch_assoc($otp_query_run)){
        echo "otp is correct";
        $_SESSION['email'] = $row['Email'];
        $del_opt = "UPDATE register SET otp = '' WHERE otp = '$otp_num'  ";
        mysqli_query($con, $del_opt); 
        $_SESSION['email'] = $_GET['email'];      
        header("location:passresetpage.php");
    }
  }
    else
    {
        echo "otp is wrong";
        $_SESSION['otpwrong'] = 1;
        header("location: forget.php");
        ob_end_flush();
        exit();
    }
}

?>

<?php
  if(isset($_POST['passwordchange']) == 'POST'){
    $email = $_GET['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    if($pass == $cpass){
      $password=password_hash($pass, PASSWORD_DEFAULT);
      $pass_update = "UPDATE register SET Password = '$password' WHERE  Email = '$email' ";
      mysqli_query($con, $pass_update);
      header("location: index.php");
     ob_end_flush();
     exit();
    }else{
      header("location: passresetpage.php");
     ob_end_flush();
     exit();
    }
  }
?>
