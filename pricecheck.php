<?php
$q = $_REQUEST["q"];
echo $q;
if($q!=null){
    if($q == "50"){
        $id = $_GET['id'];
        $_SESSION['product_id'] = $id; 
        $_SESSION['price'] = "30";
        $_SESSION['qty'] = $_POST['qty'];
    }elseif($q=="100"){
        $id = $_GET['id'];
        $_SESSION['product_id'] = $id; 
        $_SESSION['price'] = "60";
        $_SESSION['qty'] = $_POST['qty'];
    }elseif($q=="500"){
        $id = $_GET['id'];
        $_SESSION['product_id'] = $id; 
        $_SESSION['price'] = "90";
        $_SESSION['qty'] = $_POST['qty'];
    }else{
        if($q=="1000"){
            $id = $_GET['id'];
            $_SESSION['product_id'] = $id; 
            $_SESSION['price'] = "120";
            $_SESSION['qty'] = $_POST['qty'];
    }
}
}

?>