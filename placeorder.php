
<?php 
    include('dbconfig.php');
    session_start();
    $check_address = "SELECT Name, Email, deliveryaddress FROM  register WHERE Email = '$_GET[email]'";
    $address = mysqli_query($con, $check_address);
    while($delivery = mysqli_fetch_assoc($address)){
        if(empty($delivery['deliveryaddress'])){

            header("location: deliveryaddressform.php?"."email=". $delivery['Email']. "&uname=". $delivery['Name']);
              
            ?>
            
            <?php
        }else{

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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Cart</title>
<style>


.cart-wrap {
	padding: 40px 0;
	font-family: 'Open Sans', sans-serif;
}
.main-heading {
	font-size: 19px;
	margin-bottom: 20px;
}
.table-wishlist table {
    width: 100%;
}
.table-wishlist thead {
    border-bottom: 1px solid #f28741;
    margin-bottom: 5px;
}
.table-wishlist thead tr th {
    padding: 8px 0 18px;
    color: #f28741;
    font-size: 15px;
    font-weight: 400;
}
.table-wishlist tr td {
    padding: 25px 0;
    vertical-align: middle;
}
.table-wishlist tr td .img-product {
    width: 72px;
    float: left;
    margin-left: 4px;
    margin-right: 31px;
    line-height: 63px;
}
.table-wishlist tr td .img-product img {
	width: 100%;
}
.table-wishlist tr td .name-product {
    font-size: 15px;
    color: #f28741;
    padding-top: 8px;
    line-height: 24px;
    width: 50%;
}
.table-wishlist tr td.price {
    font-weight: 600;
}
.table-wishlist tr td .quanlity {
    position: relative;
}

.total {
	font-size: 24px;
	font-weight: 600;
	color: #8660e9;
}
.display-flex {
	display: flex;
}
.align-center {
	align-items: center;
}
.round-black-btn {
	border-radius: 25px;
    background: white;
    color: #f28741;
    padding: 5px 20px;
    display: inline-block;
    border: solid 2px #f28741; 
    transition: all 0.5s ease-in-out 0s;
    cursor: pointer;
    font-size: 14px;
}
.round-black-btn:hover,
.round-black-btn:focus {
	background: transparent;
	color: #f28741;
	text-decoration: none;
}
.mb-10 {
    margin-bottom: 10px !important;
}
.mt-30 {
    margin-top: 30px !important;
}
.d-block {
    display: block;
}
.custom-form label {
    font-size: 14px;
    line-height: 14px;
}
.pretty.p-default {
    margin-bottom: 15px;
}
.pretty input:checked~.state.p-primary-o label:before, 
.pretty.p-toggle .state.p-primary-o label:before {
    border-color: #8660e9;
}
.pretty.p-default:not(.p-fill) input:checked~.state.p-primary-o label:after {
    background-color: #8660e9 !important;
}
.main-heading.border-b {
    border-bottom: solid 1px #ededed;
    padding-bottom: 15px;
    margin-bottom: 20px !important;
}
.custom-form .pretty .state label {
    padding-left: 6px;
}
.custom-form .pretty .state label:before {
    top: 1px;
}
.custom-form .pretty .state label:after {
    top: 1px;
}
.custom-form .form-control {
    font-size: 14px;
    height: 38px;
}
.custom-form .form-control:focus {
    box-shadow: none;
}
.custom-form textarea.form-control {
    height: auto;
}
.mt-40 {
    margin-top: 40px !important; 
}
.in-stock-box {
	background: #1589FF;
	font-size: 12px;
	text-align: center;
	border-radius: 25px;
	padding: 4px 15px;
	display: inline-block;  
    color: #fff;
}
.trash-icon {
    font-size: 20px;
    color: #212529;
}

.addressbox{
    margin: 12px 30 12px 30px;
    padding: 3px 3px 3px 3px;
    
}
.addressdetails{

    padding: 20px;
    width: 100%;
}
.addressdetails li{
    padding: 0px 16px;
}

.addressdetails p{
    font-size: 13px;
}
</style>

</head>
<body style="color: #f28741;">

<nav class="navbar-light" style="background-color: white;box-shadow: 10px 5px 5px #f28741;">



<p style="color: #f28741; font-size:30px; text-align:center;">
<a href="index.php">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#f28741" class="bi bi-arrow-left-short" viewBox="0 0 16 16" style="float: left; margin-top:10px;">
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg></a>

<img src="img/logo.png"  alt="" width="50" height="44" class="d-inline-block align-text-top" style="float: left;" ><b><?php echo $_GET['uname'];?> Order Confirmation</b></p>    
<div>

</nav>
<div>
<img src="img/banner.jpg"  class="img-fluid" alt="Responsive image">
</div>

<div class="cart-wrap" >
		<div class="container" style="box-shadow: 10px 5px 10px 7px #f28741;">
	        <div class="row">
			    <div class="col-md-12">
			        <div class="table-wishlist">
				        <table cellpadding="0" cellspacing="0" width="100%">
				        	<thead>
					        	<tr>
					        		<th width="10%">Product Name</th>
									<th width="5%">Packs</th>
					        		<th width="5%" style="margin-left: 4px;">Unit Price</th>
					        		<th width="5%"></th>
					        	</tr>
					        </thead>
					        <tbody>
			<?php 
				include("dbconfig.php");

				$sql = "SELECT 
				addcartlists.username,
				addcartlists.email,
				addcartlists.prod_id,
				addcartlists.prod_name,
				addcartlists.prod_qty,
				addcartlists.prod_price,
				addcartlists.phone,
				addcartlists.country,
				addcartlists.state,
				addcartlists.district,
				addcartlists.city,
				addcartlists.pincode,
				productlists.images,
				productlists.boolean,
                register.locality,
                register.deliveryaddress,
                register.landmark
				FROM addcartlists 
				INNER JOIN productlists
				ON 
				addcartlists.prod_name = productlists.name
                INNER JOIN register
                ON addcartlists.email = register.Email
				WHERE addcartlists.email = '$_GET[email]' OR addcartlists.username = '$_GET[uname]';"; 

				$run_cart = mysqli_query($con, $sql); 
			?>

			<?php 
				if (mysqli_num_rows($run_cart) > 0) {
					while($cart_details = mysqli_fetch_assoc($run_cart)) {
			?>
					        	<tr>
					        		<td width="10%">
					        			<div class="display-flex align-center">
		                                    <div class="img-product">
											<?php echo'<img src="data:image;base64, '. base64_encode($cart_details['images']). ' "alt="" class="mCS_img_loaded"  " />'?>
		            
		                                    </div>
		                                    <div class="name-product">
		                                        <?php echo $cart_details['prod_name']; ?>
		                                    </div>
	                                    </div>
	                                </td>
								</td>
								 <td width="1%"><input type="number" value="1" min="1" max="20" class="form-control" id="exampleInputEmail1"  style="width: 60%;"></td>
									<td width="1%" style="margin-left: 4%;" ><span class="price" id="price"><input type="text" style="width: 60px;border: none;" class="form-control" id="exampleFormControlInput1" value="<?php echo $cart_details['prod_price']." &#8377"; ?>"></span></td>
									
					        		<td width="1%"><a class="round-black-btn btn-outline-warning" style="border-color: #f28741; font-weight: 30px;" href="#">Placeorder</a></td>
					        	</tr>

							
					        	<!--<tr>
					        		<td width="45%">
					        			<div class="display-flex align-center">
		                                    <div class="img-product">
		                                        <img src="img/logo.png" alt="" class="mCS_img_loaded">
		                                    </div>
		                                    <div class="name-product">
		                                        Apple iPad Mini
		                                    </div>
	                                    </div>
	                                </td>
					        		<td width="15%" class="price">$110.00</td>
					        		<td width="15%"><span class="in-stock-box">In Stock</span></td>
					        		<td width="15%"><a class="round-black-btn small-btn" href="payment.php">BUY NOW</a></td>
					        		<td width="10%" class="text-center"><a href="#" class="btn btn-danger">X</a></td>
					        	</tr>-->

					        	<!--<tr>
					        		<td width="45%">
					        			<div class="display-flex align-center">
		                                    <div class="img-product">
		                                        <img src="img/logo.png" alt="" class="mCS_img_loaded">
		                                    </div>
		                                    <div class="name-product">
		                                        Apple iPad Mini
		                                    </div>
	                                    </div>
	                                </td>
					        		<td width="15%" class="price">$110.00</td>
					        		<td width="15%"><span class="in-stock-box">In Stock</span></td>
					        		<td width="15%"><a class="round-black-btn small-btn" href="payment.php">BUY NOW</a></td>
					        		<td width="10%" class="text-center"><a href="#" class="btn btn-danger">X</a></td>
					        	</tr>-->

				        	</tbody>
				        </table>
				    </div>
			    </div>
			</div>
		</div>
	</div>
    <p style="margin-left: 15px;">Delivery Adddress</p>
    <div class="addressbox">
        <ul class="addressdetails" type="none">
            <li><p>Name: <?php echo $cart_details['username']; ?>  </p></li>
            <li><p>Email: <?php echo $cart_details['email']; ?></p></li>
            <li><p>Phone: <?php echo $cart_details['phone']; ?></p></li>
            <li><p>Country: <?php echo $cart_details['country']; ?></p></li>
            <li><p>State: <?php echo $cart_details['state']; ?></p></li>
            <li><p>District: <?php echo $cart_details['district']; ?></p></li>
            <li><p>City: <?php echo $cart_details['city']; ?></p></li>
            <li><p>Pincode: <?php echo $cart_details['pincode']; ?></p></li>
            <br>
            <br>
            <li>
                <?php echo $cart_details['locality']; ?>
                <br>
                <?php echo $cart_details['deliveryaddress']; ?>
                <br>
                <?php echo $cart_details['landmark']; ?>
                <br>
                <?php echo $cart_details['pincode']; ?>
            </li>
            <li><a href="addressedit.php?email=<?php echo $cart_details['email']; ?>&uname=<?php echo $cart_details['username']; ?>&locality=<?php echo $cart_details['locality']; ?>&deli_address=<?php echo $cart_details['deliveryaddress']; ?>&landmark=<?php echo $cart_details['landmark']; ?>"><button type="button" style="font-size: 12px; margin-top: 6px;"  class="btn btn-primary">Edit address</button></a></li>
        </ul>
    </div>
    <?php 
                }
            }
            ?>
</body>
</html>
<?php
}
    }
    ?>


<script>

</script>