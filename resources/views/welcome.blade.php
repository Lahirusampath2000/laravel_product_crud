<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
</head>
<body>
    <div class='container'>
    <div class='text-center'>
        <h1>Product</h1>
            <div class='row'>
                <div class='col-md-12'>
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                    @endforeach
                    <form method='Post' action="{{ route('saveProduct') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type='text' class='form-control' name='name' placeholder='Enter product name'>
                        <input type='text' class='form-control' name='price' placeholder='Enter price'>
                        <input type='text' class='form-control' name='quantity' placeholder='Enter quantity'>
                        <input type='text' class='form-control' name='category' placeholder='Enter category'>
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
                                    <td>{{$product->quantity}}</td>
                                    <td>
                                        @if($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{$product->name}} Image" width="50" height="50" class="img img-responsive"/>

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