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
    <div>
        <h3>
            HERE ARE ALL THE PRODUCTS ASSOCIATED WITH THE APP
        </h3>
        <table style="border: 2px blue">
            <thead>
                <tr>

                <th>ID </th>
                <th>Name </th>
                <th>Qty </th>
                <th>Price </th>
                <th>Description </th>
                </tr>

            </thead>
            <tbody>
                @foreach ($result as $item)
                <tr>
                    <td>{{$item->id}} </td>
                    <td>{{$item->name}} </td>
                    <td>{{$item->qty}} </td>
                    <td>{{$item->price}} </td>
                    <td> {{$item->description}}</td>
                    <td> <a href="product/{{$item->id}}/edit"> edit </a></td>
                        
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>