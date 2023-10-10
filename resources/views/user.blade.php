
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product page</title>
    

    <style>
    
    .search-controller{
        position: absolute;
        right:700px;
    }
    
                                                       
    .login-register-buttons {
        position: absolute;
        top: 10px;
        right: 20px; 
    }

    .product-card{
        width: 250px;
        height: 390px;
    }

   /* .product-card.product-image{ 
        max-width: 100px;
        height: auto;
    }*/

    .nav-logo {
        margin-bottom: 5px;
    }
    .nav-logo img {
        max-width: 50px;
    }

    .product-card .small-text {
    font-size: 14px; 
    color: #555; 
}

    .image-container {
    position: relative;
    display: inline-block;
}

    .view-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.3s ease;
    background-color:#333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}
.view-button:hover {
    background-color: #555; /* Darker background color on hover */
}

.image-container:hover .category-image{
    filter: brightness(50%);
}

    .image-container:hover .view-button {
    opacity: 1;
}

.carousel-inner {
    height: 600px; /* Adjust this value to your desired height */
}

.carousel-item {
    height: 600px; /* Adjust this value to your desired height */
}

/* Center the images vertically within the slider */
.carousel-item img {
    object-fit: cover;
    height: 100%;
}
/*-----------------------special product section------------*/ 
.special-carousel-inner {
    height: 350px; /* Adjust this value to your desired height */
}

.special-slide {
    height: 350px; /* Adjust this value to your desired height */
}

/* Center the images vertically within the slider */
.special-carousel-item img {
    object-fit: cover;
    height: 100%;
}

.special-product-card {
    max-width: 100%;
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

        .special-product-card {
            max-width: 150px;
            margin: 0 10px 20px 10px;
        }

        .special-product-image {
            max-width: 100%;
            max-height: 80%;
        }

        .card-body {
            height: 100px;
            overflow-y: auto;
        }

        .card-footer {
            text-align: center;
        }

        .dt-container {
            color: #fff; 
            text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #0ff; 
            font-family: arial;
            font-weight: bold;
            border:1px solid #FFD700;
            width:340px;
            padding:10px;
            margin-left: auto;
            margin-right: 300px;
        }

        .footer-logo{
            margin-left: 130px;
            margin-right: auto; 
        }

        

        



    

    

</style>

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="..." crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="..." crossorigin="anonymous"></script>
    <!-- Include Bootstrap's CSS -->
   


</head>

<body onLoad="renderTime();">
    <!---------------------------------date and time script------------------------>
    <script>
        function renderTime(){
            //date
            var mydate = new Date();
            var year =mydate.getYear();
                if(year <1000){
                    year +=1900
                }
            var day = mydate.getDay();
            var month =mydate.getMonth();
            var daym = mydate.getDate();
            var dayarray = new Array("Sunday,","Monday,","Tuesday,","Wednesday,","Thursday,","Friday,","Saturday,");
            var montharray= new Array("January","February","March","April","May","June","July","August","September","October","November","December");
            //date end

            //Time
            var currentTime= new Date();
            var h= currentTime.getHours();
            var m= currentTime.getMinutes();
            var s= currentTime.getSeconds();
                if(h==24){
                    h=0;
                }else if(h>12){
                    h=h-0;
                }

                if(h<10){
                    h="0"+h;
                }
                if(m<10){
                    m="0"+m;
                }
                if(s<10){
                    s="0"+s;
                }
                var myClock=document.getElementById("clockDisplay");
                myClock.textContent=""+dayarray[day]+" "+daym+" "+montharray[month]+" "+year+" | "+h+":"+m+":"+s;
                myClock.innerText=""+dayarray[day]+" "+daym+" "+montharray[month]+" "+year+" | "+h+":"+m+":"+s;

                setTimeout("renderTime()",1000);
        } 
        renderTime();      
    </script>
    <!----------------navbar------------>
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
                <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/user">Dashboard</a>
                <a class="nav-item nav-link" href="/cart">Shopping cart</a>
                <a class="nav-item nav-link" href="/admin">Admin</a>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                    <!-- Add category-related links here -->
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'Chocolate') }}">Chocolate</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'biscuit') }}">Biscuit</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'bakery') }}">Bakery</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'beverages') }}">Beverages</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'diary food') }}">Diary Food</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'household') }}">Household</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'instant food') }}">Instant Food</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'meat') }}">Meat</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'fruit') }}">Fruit</a>
                
                    </div>
                </li>
                
                <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('searchProducts') }}">
                    {{csrf_field()}}
                <div class="search-controller">
                    <input  class="form-control mr-sm-2" name="searchTerm" placeholder="Search for products">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
                    
                </form>
                
            </div>
            <div id="clockDisplay" class="dt-container"></div>
        </nav>

    </div>
    
     
    <!-------------nav bar end--------->
    <!--<div class="login-register-buttons">
        <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
    </div>-->

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



    
    <!-----------------image-slider-------------->

    <div class="slider-container" style="position: relative;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/slide-image/pepsi.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/slide-image/icecream2-slide.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/slide-image/cokee-slide.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/slide-image/meat2.jpg" alt="Fourth slide">
                </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
       <!------ <div class="search-container text-center" style="position: absolute; top: 7%; left: 50%; transform: translate(-50%, -50%); ">
            
                
            <form method="GET" action="{{ route('searchProducts') }}" class="form-inline"  >
                {{csrf_field()}}
                <div class="input-group"  style="display: flex;">
                    <input type="text" class="form-control" name="searchTerm" placeholder="Search for products" style="width: 800px;  background-color: transparent; border: 1px solid #ccc; border-radius: 5px;" onfocus="this.style.color='#fff';" onblur="this.style.color='#fff';">
                    
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="fas fa-search"></i> 
                    </button>
                    
                </div>
                   <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">Search</button>
                    </div>
                    
            </form>
                
                
            
            
        </div>-------------------->          
        
    </div>

    
    <!-------------------end of emage slider-------------->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>    


    <!--<div class="login-register-buttons">
        <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
    </div>-->

    
    <div class='container' >
            <div class="row">
                <div class='col-md-12 text-center'>
                   <!---<div class="search-container">
                        <form method="GET" action="{{ route('searchProducts') }}" class="form-inline">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" name="searchTerm" placeholder="Search for products" style="width: 800px;">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                    
                        </form>
                    </div>--->  
                

                </div> 
            </div>
            <br>
            <br>
            
            
            
            

        
            <br>
            <br>
        @if(isset($products) && count($products) > 0)
            <div class="row">
            
                @foreach($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card product-card" >
                            <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                <img src="{{ asset('storage/product_images/' . $product->image) }}" class="product-image" alt="{{ $product->name }}" width="150" height="180">
                            </div>
                
                            
                            <div class="card-body" style="height: 150px; overflow-y: auto;">
                                <h5 class="card-title" style="text-align:center">{{ $product->name }}</h5>
                                <p class="card-text">
                                    
                                    <span class="small-text">Price: Rs.{{ number_format($product->price ,2)}}
                                    <span class="float-right small-text">Quantity: {{ $product->quantity }}
                                </p>
                                
                            </div>
                            <div class="card-footer text-center">
                                <form action="{{ route('addToCart', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Buy Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            
            </div>
        @endisset
        <!-------------view by category---------------->
        <br>
        <br>
        <br>
            <div style="text-align:center">
                <h2>shop by category</h2>
            </div>
            <br>
            <br>
            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="card product-card" style="height: 300px;" >
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div class="image-container">
                                <img src="/category_img/choc_category.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'Chocolate') }}" class="view-button">View</a>
                                <!--<button class="view-button">View</button>-->
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Chocolate</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card" style="height: 300px;" >
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div class="image-container">
                                <img src="/category_img/biscuit-category.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'biscuit') }}" class="view-button">View</a>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Biscuit</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card" style="height: 300px;" >
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div class="image-container">
                                <img src="/category_img/bakery.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'bakery') }}" class="view-button">View</a>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Bakery</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                

                


            </div>
            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card product-card" style="height: 300px;" >
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div class="image-container">
                                <img src="/category_img/bev_cat.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'beverages') }}" class="view-button">View</a>
                            </div>
                            
                        
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Beverages</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card" style="height: 300px;" >
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div class="image-container">
                                <img src="/category_img/diary-cat.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'diary food') }}" class="view-button">View</a>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Diary Food</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card" style="height: 300px;" >
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div class="image-container">
                                <img src="/category_img/household-cat.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'household') }}" class="view-button">View</a>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Household</h5>
                        </div> 
                    
                    
                    </div>    
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card product-card" style="height: 300px;" >
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div class="image-container">
                                <img src="/category_img/inst_cat.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'instant food') }}" class="view-button">View</a>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Instant Food</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card" style="height: 300px;" >
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div class="image-container">
                                <img src="/category_img/meat-cat.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'meat') }}" class="view-button">View</a>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Meat</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card" style="height: 300px;" >
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div class="image-container">
                                <img src="/category_img/fruit.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'fruit') }}" class="view-button">View</a>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Fruit</h5>
                        </div> 
                    
                    
                    </div>    
                </div>
            </div>
        

    </div>
    <br>
    <br>
    <br>
    <br>
    
    <div class="slider-container" style="position: relative;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="special-carousel-inner">
                <div class="carousel-item active special-slide">
                    <img class="d-block w-100" src="/slide-image/pizza-slide.jpg" alt="First slide">
                </div>
                <div class="carousel-item special-slide">
                    <img class="d-block w-100" src="/slide-image/biriyani.jpg" alt="Second slide">
                </div>
                <div class="carousel-item special-slide">
                    <img class="d-block w-100" src="/slide-image/soupy.jpg" alt="Third slide">
                </div>
                <div class="carousel-item special-slide">
                    <img class="d-block w-100" src="/slide-image/bbq.jpg" alt="Fourth slide">
                </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    
        <br>
        <br>

        @if(isset($specialProducts) && count($specialProducts) > 0)
            <div style="text-align: center">
                <h2>Family supermarket special</h2>
            </div>
            <br>
            <br>
            <div class="table-responsive">
                <div class="d-flex overflow-auto">
                    @foreach($specialProducts as $product)
                        <div class="col-md-4 mb-4 special-product-card">
                            <div class="card product-card">
                                <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                    <img src="{{ asset('storage/product_images/' . $product->image) }}" class="product-image special-product-image" alt="{{ $product->name }}" width="150" height="180">
                                </div>
                                <div class="card-body" style="height: 150px; overflow-y: auto;">
                                    <h5 class="card-title text-center">{{ $product->name }}</h5>
                                    <p class="card-text">
                                        <span class="small-text">Price: Rs.{{ number_format($product->price, 2) }}</span>
                                        <span class="float-right small-text">Quantity: {{ $product->quantity }}</span>
                                    </p>
                                </div>
                                <div class="card-footer text-center">
                                    <form action="{{ route('addToCart', $product->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Buy Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--<button class="btn btn-primary" style="position: absolute; left: 10px;" onclick="scrollProducts(-100)">Previous</button>
                <button class="btn btn-primary" style="position: absolute; right: 10px;" onclick="scrollProducts(100)">Next</button>-->
            </div>
            <script>
                function scrollProducts(amount) {
                    $("#productContainer").animate({
                        scrollLeft: $("#productContainer").scrollLeft() + amount
                    }, "slow");
                }
            </script>
        @endif
        <!--@if(isset($specialProducts) && count($specialProducts) > 0)
            <div style="text-align: center">
                <h2>Family supermarket special</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless">
                    <tr>
                        @foreach($specialProducts as $product)
                            <td class="special-product-card">
                                <div class="card product-card">
                                    <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                        <img src="{{ asset('storage/product_images/' . $product->image) }}" class="product-image special-product-image" alt="{{ $product->name }}" width="150" height="180">
                                    </div>
                                    <div class="card-body" style="height: 150px; overflow-y: auto;">
                                        <h5 class="card-title text-center">{{ $product->name }}</h5>
                                        <p class="card-text">
                                            <span class="small-text">Price: Rs.{{ number_format($product->price, 2) }}</span>
                                            <span class="float-right small-text">Quantity: {{ $product->quantity }}</span>
                                        </p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <form action="{{ route('addToCart', $product->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Buy Now</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        @endforeach
                    </tr>
                </table>
            </div>
        @endif-->
            

  
    <br>
    <br>
    <br>

     <!------------------------footer------------------------>
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
                            <div class="footer-logo" >
                                <a href="index.html"><img src="logo/supermarket.jpg" class="img-fluid" alt="logo"></a>
                            </div>
                            <br>
                            <br>
                            
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
                                <li><a href="/">Home</a></li>
                                <li><a href="/aboutus">about us</a></li>
                                <li><a href="/user">Dashboard</a></li>
                                <li><a href="/cart">Shopping cart</a></li>
                                <li><a href="/contactus">Contact us</a></li>                            
                                
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
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="/contactus">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <!-----------------------------end of footer------------------->
    </div>

    
</body>
</html>