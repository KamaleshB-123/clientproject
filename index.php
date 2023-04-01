<?php error_reporting(0); ?>
<?php
include("dbconfig.php");

  session_start();
  if(isset($_SESSION["register_msg"]))
  {
    echo "<script>
    alert( $_SESSION[register_msg];');
    </script>";
  }

  if(isset($_SESSION['qty']))
  {
    $select_qty = $_SESSION['qty'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="stylesheet/index.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Home</title>
    <style>
        .qty[type=text]:focus{
          border: none;
          
        }
        .qty:hover{
          cursor: pointer;
        }
    </style>
</head>


<body >
<nav class="navbar navbar-light " style="background-color: #f28741;" onload=display_ct();>
  <div class="container-fluid">
    

  <span id='ct7' style="color: white;" class="navbar-brand" style="margin-right: 20%;"></span>

    <?php
    if(isset($_SESSION["user_name"]))
    {
      $user_name = $_SESSION["user_name"];

      $user_details = mysqli_query($con, "SELECT Email,Phone,Country,State,District,City,Pincode FROM register WHERE Name = '$user_name' ");
      if (mysqli_num_rows($user_details) > 0) {
        while($usr_details = mysqli_fetch_assoc($user_details)) {
          $email = $usr_details['Email'];
          $phone = $usr_details['Phone'];
          $country = $usr_details['Country'];
          $state = $usr_details['State'];
          $district = $usr_details['District']; 
          $city = $usr_details['City'];
          $pincode = $usr_details['Pincode'];
        }
      }

      
    ?>
    <form action="account.php" method="POST">
<b style="color: white; font-size:30px;" >Welcome <span><?php echo $user_name; ?></span> |

      <button class="btn btn-light" name="logout">Logout</button>

    </b>
    </form>

    <div class="btn-group">
  <button style="background-color: #f28741; color:white;" type="button" class="btn btn-light">English</button>
  <button style="background-color: #f28741; color:white;" type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a style="color: #f28741;" class="dropdown-item" href="#"><b>English</b></a></li>
    <li><a style="color: #f28741;" class="dropdown-item" href="#"><b>Tamil</b></a></li>
    <li><a style="color: #f28741;" class="dropdown-item" href="#"><b>Chinese</b></a></li>
    <li><a style="color: #f28741;" class="dropdown-item" href="#"><b>Spanish</b></a></li>
  </ul>
</div>
   
  </div>
</nav>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none; color:#f28741;" id="mySidebar">
  <button onclick="w3_close()" style="color: #f28741;" class="w3-bar-item "><b>Category</b> &times;</button>
  <a href="#" class="w3-bar-item w3-button">Pickle</a>
  <a href="#" class="w3-bar-item w3-button">Powder</a>
  <a href="#" class="w3-bar-item w3-button">Oil</a>
</div>


 

<nav class="navbar navbar-light" style="background-color: white; box-shadow: 1px 2px 2px 1px #a2a6a3;">
    

  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <button class="btn btn-outline-warning  " style="margin-top: 30px;"  onclick="w3_open()">☰</button>


      <img src="img/logo.png" alt="" width="70" height="64" class="d-inline-block align-text-top" >
      <div class="wrapper" style="margin-left: 45%; margin-top:-25%;">
  <div class="searchBar">
    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search"  />
    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#f28741" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
      </svg>
    </button>
  </div>
</div>
<div >
<a style="color: #f28741;" class="btn btn-light"><b>Home</b></a>
<a style="color: #f28741;" class="btn btn-light"><b>About</b></a>
<a style="color: #f28741;" class="btn btn-light"><b>Contact</b></a>
<a style="color: #f28741;" class="btn btn-light"><b>Privacy</b></a>
</div>
    </a>
    
   
    <form class="d-flex">
    <a href="cart.php?uname=<?php echo $user_name; ?>&email=<?php echo $email; ?>">
      <svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="#f28741" style="margin-right: 25px; margin-top: 20%;" class="bi bi-cart " viewBox="0 0 16 16" >
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
    </a>


<a href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-right: 20px; margin-top: 20%;" fill="#f28741" class="bi bi-heart" viewBox="0 0 16 16">
  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg>
</a> 

    <a style="border-color: #f28741;" href="dash.php?uname=<?php echo $user_name; ?>&email=<?php echo $email; ?>" type="button"  class="btn btn-outline-warning" >
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>Dashboard</a>


<?php }else{
  ?>
  <b style="color: white; font-size:30px;" >Welcome <span>Guest</span> |
      <button class="btn btn-light" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" >Login</button>
    </b>
 

      
<div class="btn-group">
  <button style="background-color: #f28741; color:white;" type="button" class="btn btn-light">English</button>
  <button style="background-color: #f28741; color:white;" type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a style="color: #f28741;" class="dropdown-item" href="#"><b>English</b></a></li>
    <li><a style="color: #f28741;" class="dropdown-item" href="#"><b>Tamil</b></a></li>
    <li><a style="color: #f28741;" class="dropdown-item" href="#"><b>Chinese</b></a></li>
    <li><a style="color: #f28741;" class="dropdown-item" href="#"><b>Spanish</b></a></li>
  </ul>
</div>
   
  </div>
</nav>
<nav class="navbar navbar-light" style="background-color: white; box-shadow: 1px 2px 2px 1px #a2a6a3;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="" width="70" height="64" class="d-inline-block align-text-top" >
      <div class="wrapper" style="margin-left: 40%; margin-top:-25%;">
  <div class="searchBar">
    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search"  />
    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#f28741" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
      </svg>
    </button>
  </div>
</div>
<div >
<a style="color: #f28741;" class="btn btn-light"><b>Home</b></a>
<a style="color: #f28741;" class="btn btn-light"><b>About</b></a>
<a style="color: #f28741;" class="btn btn-light"><b>Contact</b></a>
<a style="color: #f28741;" class="btn btn-light"><b>Privacy</b></a>
</div>
    </a>
    
   
    <form class="d-flex">
      <svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="#f28741" style="margin-right: 25px; margin-top: 4%;" class="bi bi-cart " viewBox="0 0 16 16" >
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>

<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-right: 20px; margin-top: 4%;" fill="#f28741" class="bi bi-heart" viewBox="0 0 16 16">
  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg>
    
    
    <button style="border-color: #f28741;"  type="button" class="btn btn-outline-warning" onclick="openForm()" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>

Register</button>
<?php
  
}
?>

<div style="color: #f28741; border-color: #f28741; " class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    
    <div class="modal-content">
      <div class="modal-header">
      <div class="col-md-4">
      <img src="img/logo.png" alt="" style="float: center;" width="70" height="64" class="d-inline-block align-text-top" >
      </div>
        <h5 class="modal-title" id="exampleModalToggleLabel">REGISTRATION  FORM | </h5>
        
        <button style="color: #f28741; margin-top: 5px;" class="btn btn-light" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"><b>Login</b></button>
        

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3">
      
      </form>   
      
      
      <form action="account.php" method="post" class="row g-4" autocomplete="off">
        <input type="hidden" name="action" value="register">


  <div class="col-md-4 ms-auto">
    
     
    
    <label for="validationDefault01" class="form-label ">Name</label>
    <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741;" type="text" class="form-control " id="validationDefault01" name="name" required>
    </div>

  <div class="col-md-4 ms-auto ">
    <label for="validationDefault02" class="form-label">Password</label>
    <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741;" type="password" class="form-control sup" id="validationDefault02" name="password" required>
  </div>


  <div class="col-md-4 ms-auto">
  <label for="validationDefault02" class="form-label">Email</label>
    <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741;" type="email" class="form-control check_email_value" id="validationDefault02" name="email"  required>
    <small class="error_email" style="color: red;"></small>
  </div>
  
  <div class="col-md-4 ms-auto">
    <label for="validationDefault03" class="form-label">Phone Number</label>
    <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741;" type="text" class="form-control check_number" id="validationDefault03" name="phone" required>
    <small class="error_number" style="color: red;"></small>
  </div>
  <div class="col-md-4 ms-auto">
    <label for="validationDefault04" class="form-label">Country</label>
    <select style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741;" class="form-select" id="validationDefault04" name="country" required>
      <option selected disabled value="">Choose</option>
      <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
    </select>
  
  </div>
  <div class="col-md-4 ms-auto">
    <label for="validationDefault03" class="form-label">State</label>
    <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741;" type="text" class="form-control" id="validationDefault03" name="state" required>
  </div>
  <div class="col-md-4 ms-auto">
    <label for="validationDefault03" class="form-label">District</label>
    <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741;" type="text" class="form-control" id="validationDefault03" name="district" required>
  </div>
  <div class="col-md-4 ms-auto">
    <label for="validationDefault03" class="form-label">City</label>
    <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741;" type="text" class="form-control" id="validationDefault03" name="city" required>
  </div>
  
  <div class="col-md-4 ">
    <label for="validationDefault05" class="form-label">Pincode</label>
    <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741;" type="text" class="form-control" id="validationDefault05" name="pincode" required>
    
  </div>
  <div class="col-md-4" style="margin-top: 11%;">
    <button style="background-color: #f28741; color:white;" name="registerbtn" class="btn btn-warning" type="submit">SUBMIT</button>
  </div>
 
  
</form>


      </div>
      
    </div>
  </div>
</div>
<div style="color: #f28741;" class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <div class="col-md-4">
      <img src="img/logo.png" alt="" style="float: center;" width="70" height="64" class="d-inline-block align-text-top" >
      </div>
        <h5 class="modal-title" id="exampleModalToggleLabel2">Login To Vannai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!--login form -->
      
      <div class="modal-body">
      <form action="account.php" method="POST">
      <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741; background-color:white;" type="text" name="email" class="form-control log_email_chk" id="staticEmail" >
      <small class="loginemailverify" style="color: red;"></small>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input style="color: #f28741; border-color: #f28741; box-shadow:2px 1px 2px 1px #f28741;" type="password" class="form-control login_password" name="pass" id="inputPassword">
      <?php
      if(isset($_SESSION["password_incorrect"]))
      {
        echo "<script>
          alert('$_SESSION[password_incorrect]');
        </script>"
    ?>
  <small class="passmsg" style="color: red;"><?php echo $_SESSION["password_incorrect"] ;?></small>
  <?php }?>
    </div>
  </div>
  <div class="modal-footer">
        <button class="btn btn-warning" name="login_button" style="background-color: #f28741; color:white;" >Login</button>
      </div>
</form>
<!--login form end -->
      <div class="modal-footer">
        <button class="btn btn-warning" style="background-color: #f28741; color:white;" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Not Yet Registered?</button>
        <a class="btn " style="color:#f28741;" href="forget.php">Forget Password?</a>

       

      </div>
      
    </div>
  </div>
</div>
</nav>
<div>
<!-- <img src="img/banner.jpg"  class="img-fluid" alt="Responsive image"> -->
</div>
<br>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
<br>

<?php
   $query = "SELECT * FROM productlists ";
   $get_product = mysqli_query($con, $query);
?>

<div class="container d-flex justify-content-center mt-50 mb-50">
<div class="row">
<?php
    if (mysqli_num_rows($get_product) > 0) {
      while($prod = mysqli_fetch_assoc($get_product)) {
        $id = $prod['id'];
    ?>
<div class="col-md-3 mt-2">
<div class="card">
<div class="card-body">
<div class="card-img-actions"> <?php echo'<img src="data:image;base64, '. base64_encode($prod['images']). ' " class="card-img img-fluid" width="96" height="350" alt=""> </div>' ?> 
</div>
<?php 
if($prod['boolean']== 1)
{
?>
<p style="color: green;">In Stock</p>
<?php
}else{
?>
<p style="color: red;">Out Of Stock</p>
<?php
}
?>
<div class="card-body bg-light text-center">
<div class="mb-2">
<h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2"  data-abc="true"><?php echo($prod['name']); ?></a> </h6> <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
</svg>
<form  method="POST">
<select class="form-select form-select-sm mt-3" name="qty"  id="qty">
  <?php 
  if($_SESSION['product_id']== $id && !empty($_SESSION['product_id']) && $select_qty ){
  ?>
<option value="<?php echo $select_qty; ?>"><?php echo $select_qty ." g"; ?></option> 
<?php
  }
?>
<option value="">Select grams or litre</option>
<option value="50">50 g</option>
<option  value="100">100 g</option>
<option  value="500">500 g</option>
<option  value="1000">1000 g</option>
</select>
<?php
  if($prod['boolean']==0){
?>
<button type="submit" disabled="true" formaction="addtocart.php?id=<?php echo $prod['id']; ?>"  class="btn btn-warning mt-1" name="check_price">Check Price</button>
<?php
  }else{
?>
<button type="submit"  formaction="addtocart.php?id=<?php echo $prod['id']; ?>"  class="btn btn-warning mt-1" name="check_price">Check Price</button>
<?php
  }
  ?>
</div>
<?php
if($_SESSION['product_id']== $id && !empty($_SESSION['product_id']) && isset($_SESSION['price']) ){
  if(isset($_SESSION['price'])!=null){
 ?>
  <input type="text" name="price" style="width: 35%; text-align: center; border: none;" class="mb-0 font-weight-semibold  qty"  id="price" value = "<?php echo $_SESSION['price'] ; ?>" readonly />₹
<?php
  }
 unset($_SESSION['price']);
}
else{
?>
  <input type="text" name="price" style="width: 35%; text-align: center; border: none;" class="mb-0 font-weight-semibold  qty"  id="price" value = "0" readonly />₹
<?php
  }
?>
<?php
    if(isset($_SESSION["user_name"])!=null && $prod['boolean']== 0)
    {
    ?>
 <button name="addtocart" disabled   id="addtocart" type="submit"  formaction="addtocart.php?username=<?php echo $_SESSION["user_name"];?>&email=<?php echo($email);?>&prod_id=<?php echo($prod['id']); ?>&prod_name=<?php echo($prod['name']); ?>&phone=<?php echo($phone)?>&country=<?php echo($country) ?>&state=<?php echo($state); ?>&district=<?php echo($district); ?>&city=<?php echo($city); ?>&pincode=<?php echo($pincode); ?>" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
<?php    
}elseif(isset($_SESSION["user_name"])==null){
  
?>
<a  href="#" class="btn bg-cart" onclick="notlogin()"><i class="fa fa-cart-plus mr-2"></i> Add to cart</a>
<?php
}
else{
  
  ?>
  <button name="addtocart"  id="addtocart" type="submit"  formaction="addtocart.php?username=<?php echo $_SESSION["user_name"];?>&email=<?php echo($email);?>&prod_id=<?php echo($prod['id']); ?>&prod_name=<?php echo($prod['name']); ?>&phone=<?php echo($phone)?>&country=<?php echo($country) ?>&state=<?php echo($state); ?>&district=<?php echo($district); ?>&city=<?php echo($city); ?>&pincode=<?php echo($pincode); ?>" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
  <?php
}
  ?>
  

  </form>
</div>
</div>
</div>
<?php
    }
  }
?>
</div>
</div> 
<?php
  unset($_SESSION["register_msg"]);
  unset($_SESSION["password_incorrect"]);
  unset($_SESSION["qty"]);
?>


<script src="js/index.js"></script>

<script>
  $(document).ready(function(){
    $('.check_email_value').keyup(function(e){
      var email = $('.check_email_value').val();
      $.ajax({
        type: "POST",
        url: "account.php",
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
  

  $(document).ready(function(){
    $('.check_number').keyup(function(e){
      var num = $('.check_number').val();
      $.ajax({
        type: "POST",
        url: "account.php",
        data:{
          "check_sub_btn2" : 1,
          "number" : num
        },
        success : function(response)
        {
          //alert(response);
          $('.error_number').text(response);
        }
      });
    });
  });

  $(document).ready(function(){
    $('.log_email_chk').keyup(function(e){
      var email = $('.log_email_chk').val();
      $.ajax({
        type: "POST",
        url: "account.php",
        data:{
          "verify" : 1,
          "email" : email
        },
        success : function(response)
        {
          //alert(response);
          $('.loginemailverify').text(response);
        }
      });
    });
  });


$(document).ready(function(){
  $(".login_password").click(function(){
    $(".passmsg").hide();
  });
});



function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

function notlogin()
{
  alert("please Login");
}

// function Grams(val){    
//   alert(val);

//   if(val == "50")
//   {
//     document.getElementById("price").value = "30";
//   }else if(val == "100"){
//     document.getElementById("price").value ="60";
//   }else if(val == "500"){
//     document.getElementById("price").innerHTML = "100";
//   }else{
//     if(val == "1000"){
//     document.getElementById("price").innerHTML = "200";
//   }

//   }

// }

// $(document).ready(function(){
//   $("#qty").change(function(){
//     alert($("#qty").val());
//   });
// });



</script>


</body>
</html>


<?php
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
?>