<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        body {
            background-image: url('/bg-image/pxfuel.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .form-control::placeholder {
            color: white;
        }

        .login-register-buttons {
            position: absolute;
            top: 10px;
            right: 20px; 
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
            margin-right: 10px;
        }
    </style>

    
    

    
</head>
<body onLoad="renderTime();">
<!----------------------------------------date and time script-------------------->
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

    
<!--------------------navbar------------->
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
            </div>
            </div>
            
            
        </nav>

    </div>

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
    <div id="clockDisplay" class="dt-container"></div>

    <div class='container'>
    <div class='text-center'>
        <h1>Product Manager</h1>
            <div class='row'>
                <div class='col-md-12'>
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                    @endforeach
                    <form method='Post' action="{{ route('saveProduct') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="input-group"  style="display: flex;">
                            <input type='text' class='form-control' name='name' placeholder='Enter product name;' style="width: 800px;  background-color: transparent; border: 1px solid #ccc; border-radius: 5px;" onfocus="this.style.color='white';" onblur="this.style.color='black';">
                        </div>
                       
                        <br>
                        <input type='text' class='form-control' name='price' placeholder='Enter price' style="width: 800px;  background-color: transparent; border: 1px solid #ccc; border-radius: 5px;" onfocus="this.style.color='white';" onblur="this.style.color='black';">
                        <br>
                        <input type='text' class='form-control' name='quantity' placeholder='Enter quantity' style="width: 800px;  background-color: transparent; border: 1px solid #ccc; border-radius: 5px;" onfocus="this.style.color='white';" onblur="this.style.color='black';">
                        
                        <br>
                        <input type='text' class='form-control' name='category' placeholder='Enter category' style="width: 800px;  background-color: transparent; border: 1px solid #ccc; border-radius: 5px;" onfocus="this.style.color='white';" onblur="this.style.color='black';">
                        <!--<select class="form-control" name="category" style="width: 800px; background-color: transparent; border: 1px solid #ccc; border-radius: 5px; color: white;">
                            <option value="" disabled selected style="color: white;">Select Category</option>
                            <option value="chocolate" style="color: black;">chocolate</option>
                            <option value="biscuit" style="color: black;">biscuit</option>
                            <option value="ice cream" style="color: black;">ice cream</option>
                            <option value="Beverages" style="color: black;">Beverages</option>
                            <option value="Diary food" style="color: black;">Diary food</option>
                            <option value="Household" style="color: black;">Household</option>
                            <option value="Instant Food" style="color: black;">Instant Food</option>
                            <option value="Meat" style="color: black;">Meat</option>
                            <option value="Fruit" style="color: black;">Fruit</option>
                            <option  style="color: black;">Special</option>
    
                        </select>-->
                        <br>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                        <input type='submit' class='btn btn-primary' value='SAVE'>
                        <input type='button' class='btn btn-warning' value='Clear'>
                    </form>
                    <br>
                    <br>
                        <table class="table table-dark">
                            <th>ID</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>price</th>
                            <th>quantity</th>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category}}</td>
                                    <td>{{$product->price}}</td>
                                    
                                    <td>
                                        @if($product->quantity > 0)
                                            {{$product->quantity}}
                                        @else
                                            <span style="color: red;">Out of Stock</span>
                                        @endif
                                    </td>
                                    
                                    <!--<td>{{$product->quantity}}</td>-->
                                    <td>
                                    
                                        @if($product->image)
                                        <img src="{{ asset('storage/product_images/' . $product->image) }}" alt="{{$product->name}} Image" width="50" height="50" class="img img-responsive"/>

                                        @endif
                                    </td>
                                    <td>
                                        <a href="/deleteproduct/{{$product->id}}" class="btn btn-warning">Delete</a>
                                    </td>
                                    <td>
                                    <a href="/updateproduct/{{$product->id}}" class="btn btn-success">Update</a>
                                    </td>
                                </tr>

                            @endforeach
                            
                        </table>
                    <br>
                    <br>
                    
                </div>
            </div>
    </div>
    </div>
    
</body>
</html>