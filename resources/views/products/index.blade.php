<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PRODUCTS</h1>
    <span>want to create products? </span>
    <form action="{{Route('product.create')}}" method="post">
    @csrf
    <button> CLICK HERE </button>
    </form>
</body>
</html>