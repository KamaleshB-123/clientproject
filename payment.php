<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
 
    <title>Payment</title>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Montserrat', sans-serif
}

body{
    background-color:white;
}

.container {
    margin: 20px auto;
    width: 800px;
    padding: 30px;
    box-shadow:  5px 10px 15px #f28741;
}

.card.box1 {
    width: 350px;
    height: 500px;
    background-color: #f28741;
    color: white;
    border-radius: 0;
    
}

.card.box2 {
    width: 450px;
    height: 580px;
    background-color: #ffffff;
    
    
}

.text {
    font-size: 13px
}

.box2 .btn.btn-primary.bar {
    width: 20px;
    background-color: transparent;
    border: none;
    color: #3ecc6d
}

.box2 .btn.btn-primary.bar:hover {
    color: #baf0c3
}

.box1 .btn.btn-primary {
    background-color: #f28741;
    width: 45px;
    height: 45px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #ddd
}

.box1 .btn.btn-primary:hover {
    background-color: #f28741;
    color: #57c97d
}

.btn.btn-success {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #ddd;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    border: none
}

.nav.nav-tabs {
    border: none;
    border-bottom: 2px solid #ddd
}

.nav.nav-tabs .nav-item .nav-link {
    border: none;
    color: #f28741;
    border-bottom: 2px solid transparent;
    font-size: 14px
}

.nav.nav-tabs .nav-item .nav-link:hover {
    border-bottom: 2px solid #f28741;
    color: #f28741;
}

.nav.nav-tabs .nav-item .nav-link.active {
    border: none;
    border-bottom: 2px solid #f28741;
}

.form-control {
    border: none;
    border-bottom: 1px solid #ddd;
    box-shadow: none;
    height: 20px;
    font-weight: 600;
    font-size: 14px;
    padding: 15px 0px;
    letter-spacing: 1.5px;
    border-radius: 0
}

.inputWithIcon {
    position: relative
}

img {
    width: 50px;
    height: 20px;
    object-fit: cover
}

.inputWithIcon span {
    position: absolute;
    right: 0px;
    bottom: 9px;
    color: #f28741;
    cursor: pointer;
    transition: 0.3s;
    font-size: 14px
}

.form-control:focus {
    box-shadow: none;
    border-bottom: 1px solid #ddd
}

.btn-outline-primary {
    color: black;
    background-color: #ddd;
    border: 1px solid #ddd
}

.btn-outline-primary:hover {
    background-color: #f28741;
    border: 1px solid #ddd
}

.btn-check:active+.btn-outline-primary,
.btn-check:checked+.btn-outline-primary,
.btn-outline-primary.active,
.btn-outline-primary.dropdown-toggle.show,
.btn-outline-primary:active {
    color: #baf0c3;
    background-color: #f28741;
    box-shadow: none;
    border: 1px solid #ddd
}

.btn-group>.btn-group:not(:last-child)>.btn,
.btn-group>.btn:not(:last-child):not(.dropdown-toggle),
.btn-group>.btn-group:not(:first-child)>.btn,
.btn-group>.btn:nth-child(n+3),
.btn-group>:not(.btn-check)+.btn {
    border-radius: 50px;
    margin-right: 20px
}

form {
    font-size: 14px
}

form .btn.btn-primary {
    width: 100%;
    height: 45px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #f28741;
    border: 1px solid #ddd
}

form .btn.btn-primary:hover {
    background-color: #f28741
}

@media (max-width:750px) {
    .container {
        padding: 10px;
        width: 100%;
        box-shadow:  5px 10px 15px #f28741;
    }

    .text-green {
        font-size: 14px
    }

    .card.box1,
    .card.box2 {
        width: 100%
    }

    .nav.nav-tabs .nav-item .nav-link {
        font-size: 12px
    }
}
.btn-orange{
    color: #f28741;
}
</style>



</head>
<body>
    <div class="container bg-light d-md-flex align-items-center"> <div class="card box1 shadow-sm p-md-5 p-md-5 p-4"> <div class="fw-bolder mb-4"><span class="fas fa-dollar-sign"></span><span class="ps-1">599,00</span></div> <div class="d-flex flex-column"> <div class="d-flex align-items-center justify-content-between text"> <span class="">Commission</span> <span class="fas fa-dollar-sign"><span class="ps-1">1.99</span></span> </div> <div class="d-flex align-items-center justify-content-between text mb-4"> <span>Total</span> <span class="fas fa-dollar-sign"><span class="ps-1">600.99</span></span> </div> <div class="border-bottom mb-4"></div> <div class="d-flex flex-column mb-4"> <span class="far fa-file-alt text"><span class="ps-2">Invoice ID:</span></span> <span class="ps-3">SN8478042099</span> </div> <div class="d-flex flex-column mb-5"> <span class="far fa-calendar-alt text"><span class="ps-2">Next payment:</span></span> <span class="ps-3">22 july,2018</span> </div> <div class="d-flex align-items-center justify-content-between text mt-5"> <div class="d-flex flex-column text"> <span>Customer Support:</span> <span>online chat 24/7</span> </div> <div class="btn btn-primary rounded-circle" style="background-color: white;"><img src="img/logo.png"></div> </div> </div> </div> <div class="card box2 shadow-sm btn-orange"> <div class="d-flex align-items-center justify-content-between p-md-5 p-4"> <span class="h5 fw-bold m-0 btn-orange">Payment methods</span> <div class="btn btn-orange bar"><span class="fas fa-bars"></span></div> </div> <ul class="nav nav-tabs mb-3 px-md-4 px-2 "> <li class="nav-item "> <a class="nav-link px-2 active" aria-current="page" href="#">Credit Card</a> </li> <li class="nav-item"> <a class="nav-link px-2" href="#">Mobile Payment</a> </li> <li class="nav-item ms-auto"> <a class="nav-link px-2" href="#">+ More</a> </li> </ul> <div class="px-md-5 px-4 mb-4 d-flex align-items-center"> <div class="btn btn-success me-4"><span class="fas fa-plus"></span></div> <div class="btn-group" role="group" aria-label="Basic radio toggle button group"> <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked> <label class="btn btn-outline-primary" for="btnradio1"><span class="pe-1">+</span>5949</label> <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off"> <label class="btn btn-outline-primary" for="btnradio2"><span class="lpe-1">+</span>3894</label> </div> </div> <form action=""> <div class="row"> <div class="col-12"> <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Credit Card</span> <div class="inputWithIcon"> <input class="form-control" type="text" placeholder="XXXX XXXX XXXX XXXX"> <span class=" rounded-circle"> <img src="img/logo.png" alt=""></span> </div> </div> </div> <div class="col-md-6"> <div class="d-flex flex-column ps-md-5 px-md-0 px-4 mb-4"> <span>Expiration<span class="ps-1">Date</span></span> <div class="inputWithIcon"> <input type="text" class="form-control" placeholder="05/20"> <span class="fas fa-calendar-alt"></span> </div> </div> </div> <div class="col-md-6"> <div class="d-flex flex-column pe-md-5 px-md-0 px-4 mb-4"> <span>CVV</span> <div class="inputWithIcon"> <input type="password" class="form-control" placeholder="123"> <span class="fas fa-lock"></span> </div> </div> </div> <div class="col-12"> <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Name</span> <div class="inputWithIcon"> <input class="form-control text-uppercase" type="text" placeholder="Name"> <span class="far fa-user"></span> </div> </div> </div> <div class="col-12 px-md-5 px-4 mt-3"> <div class="btn btn-primary w-100">Pay $599.00</div> </div> </div> </form> </div> </div>

</body>
</html>