<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>

    <style>
    .product-image {
        max-width: 250px; /* Set the maximum width for the image */
        height: auto; /* Maintain the aspect ratio */
        display: block; /* Remove any default inline spacing */
        margin: 0 auto; /* Center the image horizontally */
    }
</style>

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
    <div class='container' >
        <h1 class="font-weight-bold text-primary text-center">Product view</h1>
            <div class="row">
                <div class='col-md-12 text-center'>
                <form method="GET" action="{{ route('searchProducts') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="searchTerm" placeholder="Search for products">
                        <br>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>

                </div> 
            </div>
            <br>
            <br>

            <div class="row">
            @isset($products)
                @foreach($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card" >
                            <img src="{{ asset('storage/' . $product->image) }}" class="product-image" alt="{{ $product->name }}">
                            <div class="card-body" style="height: 150px; overflow-y: auto;">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">Price: ${{ $product->price }}</p>
                                <p class="card-text">Quantity: {{ $product->quantity }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>

    </div>

    
</body>
</html>