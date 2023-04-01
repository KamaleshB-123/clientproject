<?php
include("dbconfig.php");
session_start();

if(isset($_POST['addtocart']))
{
    echo "hi"."<br>";
    echo $_POST['qty']."<br>";
    echo $_POST['price']."<br>";

    if(empty($_POST['qty']))
    {
     ?>
     <script>
    window.location.href = "index.php";
        alert("Select the quantity");
</script>
     <?php }elseif($_POST['qty']== "0"){
     
?>
<script>
    window.location.href = "index.php";
        alert("Select the quantity");
</script>
<?php 
     }else{
?>
     <?php       

    $name = $_GET['username'];
    $email = $_GET['email'];
    $prod_id = $_GET['prod_id'];
    $prod_name = $_GET['prod_name'];
    $prod_qty = $_POST['qty'];
    $prod_price = $_POST['price'];
    $phone=$_GET['phone']; 
    $country=$_GET['country']; 
    $state=$_GET['state']; 
    $district = $_GET['district'];
    $city=$_GET['city']; 
    $pincode=$_GET['pincode']; 
$sql="INSERT INTO addcartlists(username,email,prod_id, prod_name,prod_qty, prod_price, phone, country, state, district, city, pincode) VALUES('$name','$email' ,'$prod_id','$prod_name','$prod_qty  ','$prod_price','$phone', '$country', '$state', '$district','$city', '$pincode')";
mysqli_query($con, $sql);
header("location:index.php");

}
}?>


<?php
if(isset($_POST['check_price']))
{
    
    if(isset($_POST['qty'])!=null){
        if($_POST['qty'] == "50"){
            $id = $_GET['id'];
            $_SESSION['product_id'] = $id; 
            $_SESSION['price'] = "30";
            $_SESSION['qty'] = $_POST['qty'];
            header("location: index.php");
        }elseif($_POST['qty']=="100"){
            $id = $_GET['id'];
            $_SESSION['product_id'] = $id; 
            $_SESSION['price'] = "60";
            $_SESSION['qty'] = $_POST['qty'];
            header("location: index.php");
        }elseif($_POST['qty']=="500"){
            $id = $_GET['id'];
            $_SESSION['product_id'] = $id; 
            $_SESSION['price'] = "90";
            $_SESSION['qty'] = $_POST['qty'];
            header("location: index.php");
        }else{
            if($_POST['qty']=="1000"){
                $id = $_GET['id'];
                $_SESSION['product_id'] = $id; 
                $_SESSION['price'] = "120";
                $_SESSION['qty'] = $_POST['qty'];
                header("location: index.php");
        }
    }
}
    if(empty($_POST['qty']))
    {
        ?>
    <script>
        window.location.href = "index.php";
        alert("Select the quantity");
    </script>
<?php }else{
     if($_POST['qty']== "0")
     {
?>
<script>
    window.location.href = "index.php";
        alert("Select the quantity");
</script>
<?php
     }
    }
?>

<?php

}

?>