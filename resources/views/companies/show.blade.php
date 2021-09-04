<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>compañia</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary text-center text-uppercase">
                <p class="card-category">Detalles de la compañia</p>
              </div>
              <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <td><b>NOMBRE</b></td>
                                <td>{{$companie->name}}</td>
                            </tr>
                            <tr>
                                <td><b>NIT EMPRESA</b></td>
                                <td>{{$companie->nit}}</td>
                            </tr>
                            <tr>
                        </table>
                        <hr>
                        <a href="{{url('companies')}}" class="btn btn-primary mb-3">Inicio</a>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
    </div>

</body>
</html>
