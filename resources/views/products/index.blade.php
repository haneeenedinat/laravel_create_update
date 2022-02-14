<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>products</h2>
<table border="1">
    <tr>
    <th>product name</th>
    <th>product description</th>
    <th>product quatity</th>
    <th>product price</th>
    <th>product status</th>
    <th>category_id</th>
    <th>edit</th>
    <th>delete</th>
    </tr>
    @foreach($products as $product)
    <tr>
    <td>{{$product->name}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->quatity}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->status}}</td>
    <td>{{$product->category_id}} </td>
    <td>edit</td>
    <td>delete</td>
    </tr>
    @endforeach

         </table>
</body>
</html>