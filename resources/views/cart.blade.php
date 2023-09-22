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



        h1.font-weight-bold.text-primary.text-center {
            font-family: 'Lobster', cursive;
            
    }
        .login-register-buttons {
            position: absolute;
            top: 20px; /* Adjust the top position as needed */
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
    </style>
</head>
<body>
    <header>
        <div class="login-register-buttons">
            <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
        </div>
        <!-- Your common header content here, including login and register buttons -->
        
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

        //<div class="text-center">
            <a  class="btn btn-primary">Proceed to Checkout</a>
        </div>

        @else
        <p>Your cart is empty.</p>
        @endif
    </div>
</body>
</html>