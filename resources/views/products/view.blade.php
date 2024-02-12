<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>to view</title>
</head>
<body>
    <form action=""  method="POST">
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
            <input type="text" name="name" placeholder="NAME OF PRODUCT" value="{{$product->name}}"><br><br>
            
            <label for="quantity">QUANTITY</label>
            <input type="number" name="qty" placeholder="QTY" value="{{$product->qty}}"> <br><br>

            <label for="price">PRICE</label>
            <input type="number" name="price" placeholder="PRICE" value="{{$product->price}}"> <br><br>

            <label for="description"> DESCRIPTION</label>
            <input type="text" name="description" placeholder="DESCRIPTION" value="{{$product->description}}"> <br> <br>
            <button type="submit"> POST </button>
        </div>
</form>
</body>
</html>