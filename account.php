<?php
include("dbconfig.php");
session_start();

//email check

if(isset($_POST["check_sub_btn"]))
{
    $email = $_POST["email_id"];
    $email_query = "SELECT * FROM register WHERE Email = '$email' ";
    $email_query_run = mysqli_query($con, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        echo "Email is already taken. Please try another";
    }
    else
    {
        echo "It's available";
    }
}


//login email check

if(isset($_POST["verify"]))
{
    $email = $_POST["email"];
    $email_query = "SELECT * FROM register WHERE Email = '$email' ";
    $email_query_run = mysqli_query($con, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        echo "Email is Verified ,Next Enter your password ";
    }
    else
    {
        echo "Email is not Verified, please registered";
    }
}

//phone number check

if(isset($_POST["check_sub_btn2"]))
{
    $number = $_POST["number"];
    $number_query = "SELECT * FROM register WHERE Phone = '$number' ";
    $number_query_run = mysqli_query($con, $number_query);
    if(mysqli_num_rows($number_query_run) > 0)
    {
        echo "Number is already taken. Please try another";
    }
    
    else
    {
        echo "It's available";
    }
}

//user signup

if(isset($_POST["registerbtn"]))
{
$name=$_POST['name'];
$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
$email=$_POST['email']; 
$phone=$_POST['phone']; 
$country=$_POST['country']; 
$state=$_POST['state']; 
$district = $_POST['district'];
$city=$_POST['city']; 
$pincode=$_POST['pincode']; 
echo $name;
$sql="INSERT INTO register(Name,Password, Email, Phone, Country, State,District, City, Pincode) VALUES('$name', '$password', '$email', '$phone', '$country', '$state', '$district','$city', '$pincode')";
$run_query =  mysqli_query($con, $sql);


if($run_query)
{
    
    $_SESSION['register_msg'] = "Registartion Sucessfully" ; 
    header("location:index.php");
    exit();
}

}

//login
if(isset($_POST["login_button"]))
{
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $login_check = "SELECT * FROM register WHERE Email = '$email' ";
    $result = mysqli_query($con, $login_check);
    if (mysqli_num_rows($result) == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['Password'])){ 
               
                $_SESSION["user_name"] =  $row["Name"];

                header("location: index.php");
            }else{
                 $_SESSION["password_incorrect"] ="password is wrong,try again";
                 header("location: index.php");
            } 
    }
    }
}


//logout
if(isset($_POST["logout"]))
{
    session_destroy();
    header("location: index.php");
}

?>




<?php
if(isset($_POST['updateprofile'])){
    $name=$_POST['name'];
    $email=$_POST['email']; 
    $phone=$_POST['phone']; 
    $country=$_POST['country']; 
    $state=$_POST['state']; 
    $district = $_POST['district'];
    $city=$_POST['city']; 
    $pincode=$_POST['pincode']; 

    $sql1 = "UPDATE register SET Name = '$name', Email = '$email', Phone = '$phone', Country = '$country',  
            State = '$state', District = '$district', City = '$city', Pincode = '$pincode' WHERE Email = '$_GET[email]' ";
    $sql2 = "UPDATE addcartlists SET username = '$name', 	email = '$email', phone = '$phone', 	country = '$country',  
    state = '$state', district = '$district', 	city = '$city', 	pincode = '$pincode' WHERE Email = '$_GET[email]' ";
    $run_query =  mysqli_query($con, $sql1);
    mysqli_query($con, $sql2);
    header("location: index.php");
    $_SESSION["userupdate"] = "Successfully updated";
}
?>