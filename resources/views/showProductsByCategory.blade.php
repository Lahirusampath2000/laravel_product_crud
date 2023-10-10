<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .product-card{
            width: 250px;
            height: 390px;
    }

  

        .product-card .small-text {
            font-size: 14px; 
            color: #555; 
    }

        .image-container {
        position: relative;
        display: inline-block;
    }

    .search-controller{
        position: absolute;
        right:700px;
    }
    
                                                       
    .login-register-buttons {
        position: absolute;
        top: 10px;
        right: 20px; 
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



    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-..." crossorigin="anonymous"></script>

   
    
    

</head>
<body>
    


    
    <!------------------navbar-------------->
    <div class="nav-controller">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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
                
            </div>
                <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('searchProducts') }}">
                    {{csrf_field()}}
                <div class="search-controller">
                    <input  class="form-control mr-sm-2" name="searchTerm" placeholder="Search for products">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
                    
                </form>
            </div>
        </nav>

    </div>
    <br>
    <br>
    <br>
    
     
    <!-------------nav bar end--------->
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


    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                            <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                <img src="{{ asset('storage/product_images/' . $product->image) }}" class="product-image" alt="{{ $product->name }}" width="150" height="180">
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
        </div>
    </div>
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
                                <img src="/category_img/category-icecream.jpeg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'icecream') }}" class="view-button">View</a>
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


    
</body>
</html>