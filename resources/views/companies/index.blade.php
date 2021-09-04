<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Compañias</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary text-center text-uppercase">
                <p class="card-category">Compañias registradas</p>
              </div>
              <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <a href="{{route('companies.create')}}" class="btn btn-success mb-3">Registra la compañia</a>
                        <a href="{{route('products.index')}}" class="btn btn-primary mb-3">Productos registrados</a>
                        @if (session('success'))
                                <div class="alert alert-success mt-3" role="success" >
                                  {{ session('success') }}
                                </div>
                                @endif
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>NIT</th>
                                        <th>FECHA CREACION</th>
                                        <th>FECHA ACTUALIZACION</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($companies as $companie)
                                    <tr>
                                        <td><a href="companies/{{$companie->id}}">{{$companie->id}}</a></td>
                                        <td>{{$companie->name}}</td>
                                        <td>{{$companie->nit}}</td>
                                        <td>{{$companie->created_at}}</td>
                                        <td>{{$companie->updated_at}}</td>
                                        <td>
                                            <form action="{{route('companies.destroy', $companie->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('companies.show', $companie->id)}}"><i class="fas fa-eye" title="Ver detalles"></i></a>
                                                <a href="{{route('companies.edit', $companie->id)}}"><i class="fas fa-edit" title="Editar"></i></a>
                                                <button type="submit" title="Eliminar">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        {{$companies->links()}}
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
  </div>
</body>
</html>
