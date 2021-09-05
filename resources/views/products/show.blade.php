<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Detalles de producto</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary text-center text-uppercase">
                <p class="card-category">Detalles de producto</p>
              </div>
              <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <td><b>NOMBRE</b></td>
                                <td>{{$product->name}}</td>
                            </tr>
                            <tr>
                                <td><b>DESCRIPCION</b></td>
                                <td>{{$product->description}}</td>
                            </tr>
                            <tr>
                                <td><b>PRECIO</b></td>
                                <td>{{$product->precio}}</td>
                            </tr>
                            <tr>
                                <td><b>EMPRESA</b></td>
                                <td>{{$product->companie->name}}</td>
                            </tr>
                            <tr>
                                <td><b>IMAGEN</b></td>
                                <td><img height="50px" width="50px" class="rounded-circle" src="{{asset('/storage/images/products/'.$product->image)}}"></td>
                            </tr>
                            <tr>
                        </table>
                        <hr>
                        <a href="{{url('products')}}" class="btn btn-primary mb-3">Inicio</a>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
    </div>

</body>
</html>
