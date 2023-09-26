<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600');

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Open Sans', sans-serif;
	color: #242424;
	font-weight: 600;
}

#wrapper {
	display: table;
	table-layout: fixed;
	width: 100%;
	height: 100vh;
}

.container1 {
	background-color: white;
	float: none;
	display: table-cell;
	vertical-align: middle;
	width: 33.333%;
}

.container2 {
	background-color: #ea6153;
	float: none;
	display: table-cell;
	vertical-align: middle;
	width: 66.666%;
}

.order {
	width: 80%;
	height: auto;
	margin: 0 auto;
}

.order h2 {
	font-size: 1.8em;
	text-align: center;
	margin-bottom: 10%;
}

.item {
	width: 100%;
	height: auto;
	background-color: white;
	box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.2);
	margin-bottom: 10%;
	overflow: hidden;
	position: relative;
}

.item:last-of-type {
	margin-bottom: 0;
}

.item img {
	float: left;
	margin-right: 3%;
}

.item .info {
	padding: 3%;
}

.item .quantity {
	font-size: 0.8em;
}

.item .price {
	background-color: #3FB158;
	position: absolute;
	padding: 1% 2%;
	color: white;
	bottom: 5%;
	right: 2%;
}

hr {
	border-top: 1px solid #A8A8A8;
}

.ship, .total {
	margin: 10% 0;
	text-align: right;
}

.total {
	font-size: 1.5em;
}

.checkout {
	width: 90%;
	margin: 0 auto;
}

.checkout p {
	display: inline-flex;
	flex-direction: row;
	margin-right: 4%;
}

.checkout p, .checkout i {
	color: white;
	font-size: 1.6em;
}

.checkout i {
	margin-right: 4%;
}

.checkout p:last-of-type, .checkout i:nth-of-type(3) {
	opacity: 0.5;
}

.payment {
	background-color: white;
	width: 100%;
	height: auto;
	background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/chien.png);
	background-repeat: no-repeat;
	background-position: right;
	background-size: 50%;
	margin-top: 3.8%;
}

.infos {
	width: 50%;
	padding: 3% 5% 0 5%;
}

.infos h2 {
	color: #ea6153;
	font-size: 1.8em;
	margin-bottom: 10%;
}

.visa, .mastercard, .paypal {
	box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
	width: 25%;
	height: auto;
	background-color: white;
	cursor: pointer;
	margin-right: 5%;
	margin-bottom: 10%;
}

.mastercard, .paypal {
	opacity: 0.5;
	transition: 0.3s ease-in-out;
}

.mastercard:hover,
.paypal:hover {
	opacity: 1;
}

.paypal {
	margin-right: 0;
}

.title {
	color: #242424 !important;
	opacity: 1 !important;
	font-size: 1em !important;
}

input, select {
	border: none;
	padding: 2%;
	box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
	margin-top: 2%;
}

input:focus,
select:focus {
	outline: none;
}

.number {
	width: 20%;
	margin-right: 5.3%;
	margin-bottom: 10%;
}

.number:last-of-type {
	margin-right: 0;
}

.cardHolderName {
	margin-bottom: 10%;
}

.cardHolderName input {
	width: 100%;
}

select {
	margin-right: 2%;
}

select:last-of-type {
	margin-right: 0;
}

.expiration, .security {
	margin-bottom: 10%;
}

.security input {
	width: 25%;
}

button {
	background-color: #ea6153;
	width: 100%;
	padding: 5%;
	border: none;
	color: white;
	cursor: pointer;
	transition: 0.3s ease-in-out;
	margin-bottom: 4%;
}

button:hover {
	background-color: #C64F46;
}
    </style>
</head>
<body>
<div id="wrapper">
	<div class="container1">
		<div class="order">
			<h2>Your order summary</h2>

        </div>
        <div class="cart-items">
            <h2>Your Cart</h2>
            <ul>
                @foreach($cart as $productId => $item)
                    <li>
                        <span>{{ $item['product']->name }}</span>
                        <span>Quantity: {{ $item['quantity'] }}</span>
                        <span>Total: Rs.{{ $item['product']->price * $item['quantity'] }}</span>
                    </li>
                @endforeach
            </ul>
        </div> 
			
	</div> <!-- .container1 -->
	
	<div class="container2">
		<div class="checkout">
			
			
			<div class="payment">
				<div class="content">
					<div class="infos">
						<div class="method">
							<h2>Choose a payment method</h2>
							<img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/visa.png' alt='' class="visa">
							<img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/mastercard.png' alt='' class="mastercard">
							<img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1978060/paypal.png' alt='' class="paypal">
						</div> <!-- .method -->
						<div class="cardNumber">
							<p class="title">Credit card number</p><br>
							<input type="text" class="number">
							<input type="text" class="number">
							<input type="text" class="number">
							<input type="text" class="number">							
						</div> <!-- .cardNumber -->
						<div class="cardHolderName">
							<p class="title">Card holder name</p>
							<input type="text">
						</div> <!-- cardHolderName -->
						<div class="expiration">
							<p class="title">Expiration date</p>
							<select>
								<option>Month</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
							</select>
							
							<select>
								<option>Year</option>
								<option>2019</option>
								<option>2020</option>
								<option>2021</option>
							</select>
						</div> <!-- .expiration -->
						<div class="security">
							<p class="title">Security</p>
							<input type="text">
						</div><!-- .security -->
						<button>Checkout</button>
					</div> <!-- .infos -->
				</div> <!-- .content -->
			</div> <!-- .payment -->
		</div> <!-- .checkout -->
	</div> <!-- .container2 -->
</div> <!-- #wrapper -->
</body>
</html>