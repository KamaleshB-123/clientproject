<?php
include('dbconfig.php');
if(isset($_POST['adddeliveryaddress']) == 'POST')
{   
    $name = $_GET['uname'];
    $email= $_GET['email'];
    $locality = $_POST['locality'];
    $address = $_POST['address'];
    $landmark = $_POST['landmark'];

    $address_update = "UPDATE register SET 
    locality ='$locality',
    deliveryaddress = '$address' , 
    landmark = '$landmark' WHERE Email = '$email' ";
    mysqli_query($con,$address_update);
    header("location: placeorder.php?"."email=". $email . "&uname=" . $name);
}


?>