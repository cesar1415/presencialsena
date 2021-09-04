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
                <p class="card-category">Registra tu compañia</p>
              </div>

              <div class="container mt-3">
                <div class="row">
                    <div class="col-md-5">
                        <form action="{{route('companies.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label for="">nit</label>
                                <input type="number" class="form-control" name="nit">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Registrar</button>
                                <a href="{{url('companies')}}" class="btn btn-danger">Cancelar</a>
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
