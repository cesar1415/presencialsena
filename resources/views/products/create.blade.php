<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Registro de producto</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary text-center text-uppercase">
                <p class="card-category">Registra tu producto</p>
              </div>

              <div class="container mt-3">
                <div class="row">
                    <div class="col-md-5">
                        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label for="">descripcion</label>
                                <input type="text" class="form-control" name="description">
                            </div>

                            <div class="form-group">
                                <label for="">precio</label>
                                <input type="number" class="form-control" name="precio">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Seleccione el archivo</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                            </div>

                            <div class="form-group">
                                <label for="companies_id">Empresa</label>
                                <select class="form-control" name="companies_id" id="companies_id">
                                    @foreach ($companies as $companie)
                                        <option value="{{$companie->id}}">{{$companie->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Registrar Producto</button>
                                <a href="{{url('products')}}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
    </div>

</body>
</html>
