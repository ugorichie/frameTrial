<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create product</h1>

    <form action="{{Route('product/create-post')}}"  method="POST">
        @csrf
        <div>
            @if ($errors->any())
            <ul>

                @foreach ($errors->all() as $error)
                <li> {{$error}}</li>
                @endforeach
            </ul>  
            @endif
        </div>
        <div>
            <label for="name">NAME</label>
            <input type="text" name="name" placeholder="NAME OF PRODUCT"><br><br>
            
            <label for="quantity">QUANTITY</label>
            <input type="number" name="qty" placeholder="QTY"> <br><br>

            <label for="price">PRICE</label>
            <input type="number" name="price" placeholder="PRICE"> <br><br>

            <label for="description"> DESCRIPTION</label>
            <input type="text" name="description" placeholder="DESCRIPTION"> <br> <br>
            <button type="submit"> POST </button>
        </div>
</form>
</body>
</html>