<?php error_reporting(0); ?>
<?php 
include("dbconfig.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="stylesheet/index.css">
    <link rel="stylesheet" href="stylesheet/dash.css">

    <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <title>Dashboard</title>

    <style>
    body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #f28741;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
  
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
  
}

@media screen and (min-width: 768px) {
  .main-body {
    padding: 15px;
    margin-left: 200px;
}

}




.main{
  width: 50%;
  margin: 1% auto;
}









body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: 0px;
    margin-left: 10px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}




</style>



</head>
<body>
<nav class="navbar-light" style="background-color: white; box-shadow: 0px 0px 15px 0px #000000;">



<p style="color: #f28741; font-size:30px; text-align:center;">
<a href="index.php">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#f28741" class="bi bi-arrow-left-short" viewBox="0 0 16 16" style="float: left; margin-top:10px;">
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg></a>

<img src="img/logo.png"  alt="" width="50" height="44" class="d-inline-block align-text-top" style="float: left;" ><b>Vannai Family</b></p>    
<div>
</nav>

<div class="sidebar" >
  
  
  <a class="active"  href="dash.php">ACCOUNT</a>
  <a href="#contact">ABOUT</a>
  <a href="#about">PRIVACY</a>
  <a href="awards.php">AWARDS</a>

</div>



<div class="container">
  
    <div class="main-body">
    
          
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            
              
                
            <div class="col-md-10">
              
              <div class="card mb-3">
             
              <div class="card-body">
                
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                   
                
              </div>
              <?php 
                $sql = "SELECT * FROM register WHERE Name = '$_GET[uname]' AND Email = '$_GET[email]' ";
                $result = mysqli_query($con, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                   
                
              ?>
                <div class="card-body" style="color:#f28741;">
                  
                  <div class="row" >
                    
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text">
                      <?php
                        echo $row["Name"];
                      ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text">
                      <?php
                        echo $row["Email"]; 
                      ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text">
                    <?php
                        echo $row["Phone"]; 
                      ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text">
                    <?php
                        echo $row["Country"],",",$row["State"],",",$row["District"],",",$row["City"]; 
                      ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pincode</h6>
                    </div>
                    <div class="col-sm-9 text">
                    <?php
                        echo $row["Pincode"]; 
                      ?>
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-warning " style="background-color: #f28741; color:white;"  href="profedit.php?name=<?php echo $row['Name']; ?>&email=<?php echo $row["Email"]; ?>&phone=<?php echo $row["Phone"]; ?>&country=<?php echo $row["Country"]; ?>&state=<?php echo $row["State"]; ?>&district=<?php echo $row["District"] ?>&city=<?php echo $row["City"];?>&pincode=<?php  echo $row["Pincode"];  ?>">Edit</a>
                    </div>
                    <?php
                      }
                    } else {
                      echo "0 results";
                    }
                  ?>
                  </div>
                </div>
              </div>



            </div>
            
          </div>

   
        </div>
       
    </div>


</div>

<script>


</script>

</body>
</html>