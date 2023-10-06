<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>
        .background-image {
            background-image: url('/cart_img/food_cart.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .table-container{
            backdrop-filter: blur(5px); /* Adjust the blur amount as needed */
            background: rgba(0, 0, 0, 0.3); /* Background color to give a semi-transparent effect */
            padding: 20px;
        }

        .nav-logo {
        margin-bottom: 5px;
        }
        .nav-logo img {
            max-width: 50px;
        }



        h1.font-weight-bold.text-primary.text-center {
            font-family: 'Lobster', cursive;
            
    }
        .login-register-buttons {
            position: absolute;
            top: 10px; /* Adjust the top position as needed */
            right: 20px; /* Adjust the right position as needed */
        }

        .text-right{
            color: red; /* Set text color to contrast with the background */
            font-weight: bold;
            font-family: 'Roboto',  sans-serif;
            font-size: 23px;

        }

        
        

        

        /* Customize text style for better visibility */
        .blurred-table th,
        .blurred-table td {
            color: black; /* Set text color to contrast with the background */
            font-weight: bold;
            font-family: 'Roboto',  sans-serif;
            font-size: 23px;
        }

        
        /*------------------------------------------footer--------------------*/
        ul {
            margin: 0px;
            padding: 0px;
        }
        .footer-section {
        background: #151414;
        position: relative;
        }
        .footer-cta {
        border-bottom: 1px solid #373636;
        }
        .single-cta i {
        color: #ff5e14;
        font-size: 30px;
        float: left;
        margin-top: 8px;
        }
        .cta-text {
        padding-left: 15px;
        display: inline-block;
        }
        .cta-text h4 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 2px;
        }
        .cta-text span {
        color: #757575;
        font-size: 15px;
        }
        .footer-content {
        position: relative;
        z-index: 2;
        }
        .footer-pattern img {
        position: absolute;
        top: 0;
        left: 0;
        height: 330px;
        background-size: cover;
        background-position: 100% 100%;
        }
        .footer-logo {
        margin-bottom: 30px;
        }
        .footer-logo img {
            max-width: 200px;
        }
        .footer-text p {
        margin-bottom: 14px;
        font-size: 14px;
            color: #7e7e7e;
        line-height: 28px;
        }
        .footer-social-icon span {
        color: #fff;
        display: block;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
        }
        .footer-social-icon a {
        color: #fff;
        font-size: 16px;
        margin-right: 15px;
        }
        .footer-social-icon i {
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
        }
        .facebook-bg{
        background: #3B5998;
        }
        .twitter-bg{
        background: #55ACEE;
        }
        .google-bg{
        background: #DD4B39;
        }
        .footer-widget-heading h3 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 40px;
        position: relative;
        }
        .footer-widget-heading h3::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -15px;
        height: 2px;
        width: 50px;
        background: #ff5e14;
        }
        .footer-widget ul li {
        display: inline-block;
        float: left;
        width: 50%;
        margin-bottom: 12px;
        }
        .footer-widget ul li a:hover{
        color: #ff5e14;
        }
        .footer-widget ul li a {
        color: #878787;
        text-transform: capitalize;
        }
        .subscribe-form {
        position: relative;
        overflow: hidden;
        }
        .subscribe-form input {
        width: 100%;
        padding: 14px 28px;
        background: #2E2E2E;
        border: 1px solid #2E2E2E;
        color: #fff;
        }
        .subscribe-form button {
            position: absolute;
            right: 0;
            background: #ff5e14;
            padding: 13px 20px;
            border: 1px solid #ff5e14;
            top: 0;
        }
        .subscribe-form button i {
        color: #fff;
        font-size: 22px;
        transform: rotate(-6deg);
        }
        .copyright-area{
        background: #202020;
        padding: 25px 0;
        }
        .copyright-text p {
        margin: 0;
        font-size: 14px;
        color: #878787;
        }
        .copyright-text p a{
        color: #ff5e14;
        }
        .footer-menu li {
        display: inline-block;
        margin-left: 20px;
        }
        .footer-menu li:hover a{
        color: #ff5e14;
        }
        .footer-menu li a {
        font-size: 14px;
        color: #878787;
        }
        .img-fluid{
            max-width:150px;
            max-height:150px;
            border-radius: 50%;
        }
        

        /*-------------------end of footer----------------*/
    </style>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>


    <div class="nav-controller">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav-logo">
                <a href="index.html"><img src="logo/supermarket.jpg" class="img-fluid" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active home" href="/" >Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/user" style="color:white">Dashboard</a>
                <a class="nav-item nav-link" href="/cart" style="color:white">Shopping cart</a>
                <a class="nav-item nav-link" href="/admin" style="color:white">Admin</a>
            </div>
            </div>
        </nav>

    </div>



    <header>
        <!--<div class="login-register-buttons">
            <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
        </div>--->
        <!-- Your common header content here, including login and register buttons -->

        <div class="login-register-buttons">
            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
            @else
                <a href="#" class="btn btn-outline-primary"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </div>
        
    </header>
    <div class="background-image"></div>
    <div class="container">
        <h1 class="font-weight-bold text-primary text-center" style="color: red;">Shopping Cart</h1>
        <br>
        <br>
        <br>
        <br>

        @if(count($cart) > 0)
        <div class="table-container">
        <table class="table table-bordered blurred-table">
        <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $productId => $item)
                <tr>
                    <td>{{ $item['product']->name }}</td>
                    <td>Rs.{{ $item['product']->price }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>Rs.{{ $item['product']->price * $item['quantity'] }}</td>
                    <td>
                        <form action="{{ route('removeFromCart', $productId) }}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-warning">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
        </div>
        

        <div class="text-right">
            <strong>Total: Rs.{{ $totalCartPrice }}</strong>
        </div>

        <div class="text-center">
            <a  class="btn btn-primary" href="{{('/checkout')}}">Proceed to Checkout</a>
        </div>

        @else
        <p>Your cart is empty.</p>
        @endif
    </div>
    
    <br>
    <br>
      <!--------------------------------footer------------------------------------>  
    <div class="footer">
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+94 76 475 8136</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>lahiru123@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="logo/supermarket.jpg" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon text-center" style="text-align: center; ">
                                <span>Follow us</span>
                                <a href="#" ><i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i></a>
                                <a href="#" ><i class="fab fa-twitter fa-2x" style="color: #55acee;"></i></a>
                                <a href="#"><i class="fab fa-google fa-2x" style="color: #dd4b39;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about us</a></li>
                                <li><a href="http://127.0.0.1:8000/user">Dashboard</a></li>
                                <li><a href="http://127.0.0.1:8000/cart">Shopping cart</a></li>
                                <li><a href="http://127.0.0.1:8000/contactus">Contact us</a></li>                            
                                
                            </ul>
                        </div>
                        
                        
                    </div>
                    
                    
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <!-----------------------------end of footer------------------->
    </div>
    
            
    </div>
</body>
</html>