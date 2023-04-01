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

.main{
  width: 50%;
  margin: 1% auto;
}




.card {

  margin-left: 8%;
}



</style>



</head>
<body>
<nav class="navbar-light" style="background-color: white;">



<p style="color: #f28741; font-size:30px; text-align:center;">
<a href="index.php">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#f28741" class="bi bi-arrow-left-short" viewBox="0 0 16 16" style="float: left; margin-top:20px;">
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg></a>

<img src="img/logo.png"  alt="" width="70" height="64" class="d-inline-block align-text-top" style="float: left;" ><b>VANNAI FAMILY</b></p>    
<div>
</nav>

<div class="sidebar">
  
  <a href="dash.php">ACCOUNT</a>
  <a href="#contact">ABOUT</a>
  <a href="#about">PRIVACY</a>
  <a class="active"   href="awards.php">AWARDS</a>

</div>

<div class="card-group">
  <div class="card">
    <img src="img/Clumsy.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">CLUMSY BIRD</h5>
      
      <div class="card-footer">
      <a style="border-color: #f28741;" class="btn btn-warning"  href="https://ellisonleao.github.io/clumsy-bird/">Play</a>
      </div>
    </div>
    
  </div>
  <div class="card">
    <img src="img/HexGL.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">HexGL</h5>
    </div>
    <div class="card-footer">
    <a style="border-color: #f28741;" class="btn btn-warning"  href="http://hexgl.bkcore.com/play/">Play</a>

  </div>
  </div>
  <div class="card">
    <img src="img/mk.js.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">MK.JS</h5>
    </div>
    <div class="card-footer">
    <a style="border-color: #f28741;" class="btn btn-warning"  href="https://mk.mgechev.com/">Play</a>
    </div>
  </div>
</div>





</div>

<script>


</script>

</body>
</html>