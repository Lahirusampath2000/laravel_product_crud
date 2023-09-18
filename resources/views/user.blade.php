<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
    <div class='container' >
        <h1 class="font-weight-bold text-primary text-center">Product view</h1>
            <div class="row">
                <div class='col-md-12 text-center'>
                <form method='Post' >
                        {{csrf_field()}}
                        <input type='text' class='form-control' name='name' placeholder='Enter product name or category'>
                        <br>
                        <input type='submit' class='btn btn-primary mx-auto' value='Search'>
                        
                    </form>

                </div> 
            </div>

    </div>

    
</body>
</html>