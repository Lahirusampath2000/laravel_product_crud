<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product page</title>
    

    <style>
                                                       
    .login-register-buttons {
        position: absolute;
        top: 20px;
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

    

    

</style>

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


</head>

<body>
    <div class="login-register-buttons">
        <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
    </div>



    
    <!-----------------image-slider-------------->

    <div class="slider-container" style="position: relative;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/slide-image/redbull-slide.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/slide-image/icecream2-slide.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/slide-image/coke-slide.jpg" alt="Third slide">
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
        <div class="search-container text-center" style="position: absolute; top: 7%; left: 50%; transform: translate(-50%, -50%); ">
            
                
            <form method="GET" action="{{ route('searchProducts') }}" class="form-inline"  >
                {{csrf_field()}}
                <div class="input-group"  style="display: flex;">
                    <input type="text" class="form-control" name="searchTerm" placeholder="Search for products" style="width: 800px;  background-color: transparent; border: 1px solid #ccc; border-radius: 5px;" onfocus="this.style.color='#fff';" onblur="this.style.color='#fff';">
                    
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="fas fa-search"></i> <!-- Font Awesome search icon -->
                    </button>
                    
                </div>
                   <!--<div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">Search</button>
                    </div> -->
                    
            </form>
                
                
            
            
        </div>
    </div>

    
    <!-------------------end of emage slider-------------->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <div class="login-register-buttons">
        <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
    </div>
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
            <div>
                <h2>shop by category</h2>
            </div>
            <br>
            <!--view by category-->
            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="card product-card" style="height: 300px;" >
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div class="image-container">
                                <img src="/category_img/choc_category.jpg" class="category-image" alt="" width="250" height="300">
                                <button class="view-button">View</button>
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
                                <button class="view-button">View</button>
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
                                <img src="/category_img/category-icecream.jpeg" class="category-image" alt="" width="250" height="300">
                                <button class="view-button">View</button>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Ice cream</h5>
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
                                <button class="view-button">View</button>
                            </div>
                            
                        
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Ice cream</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card" style="height: 300px;" >
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div class="image-container">
                                <img src="/category_img/diary-cat.jpg" class="category-image" alt="" width="250" height="300">
                                <button class="view-button">View</button>
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
                                <button class="view-button">View</button>
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
                                <button class="view-button">View</button>
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
                                <button class="view-button">View</button>
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
                                <button class="view-button">View</button>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Fruit</h5>
                        </div> 
                    
                    
                    </div>    
                </div>
            </div>

        
            <br>
            <br>
            <div class="row">
            @isset($products)
                @foreach($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card product-card" >
                            <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                <img src="{{ asset('storage/' . $product->image) }}" class="product-image" alt="{{ $product->name }}" width="150" height="180">
                            </div>
                
                            
                            <div class="card-body" style="height: 150px; overflow-y: auto;">
                                <h5 class="card-title">{{ $product->name }}</h5>
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
            @endisset
        </div>

    </div>

    
</body>
</html>