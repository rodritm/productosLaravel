<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <br>
                    <div class="card-header">
                    Listado de productos
                    <a href="{{route('products.create')}}" class="btn btn-success btn-sm float-right">Nuevo producto</a>
                    </div>
                    <div class="card-body">
                    @if(session('info')) 
                        <div class="alert alert-success">
                        {{session('info')}}
                        </div>
                    @endif
                    <table class="table table-hover table-sm">
                        <thead>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td><button class="btn btn-danger btn-sm">Eliminar</button></a></td>
                            </tr>
                        @endforeach    
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>