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
	height: 200px;
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
	background-image: url(/checkout-img/check-img.jpg);
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

        .dt-container {
            color: black;  
            font-family: arial;
            font-weight: bold;
            border:1px solid #FFD700;
            width:340px;
            padding:10px;
            margin-left: 10px;
            margin-right: auto;
        }
        

    </style>
</head>
<body onLoad="renderTime();">
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

    <div id="clockDisplay" class="dt-container"></div>

<div id="wrapper">
	<div class="container1">
		<div class="order">
			<h2>Your order summary</h2>

        </div>
        <div class="cart-items">
			
			
            
            <ul>
                @foreach($cart as $productId => $item)
                    <li>
                        <span>{{ $item['product']->name }}</span>
                        <span>Quantity: {{ $item['quantity'] }}</span>
                        <span>Total: Rs.{{ $item['product']->price * $item['quantity'] }}</span>
						<br>
						
                    </li>
					<br>
                @endforeach
				<br>
				<br>
				<div style="text-align:center">
					<span ><strong >Total: Rs.{{ $totalCartPrice }}</strong></span>
				</div>
				
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
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
							
							<select>
								<option>Year</option>
								<option>2023</option>
								<option>2024</option>
								<option>2025</option>
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