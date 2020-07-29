<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    

    <title>Crear empleado</title>
  </head>
  <body>
    <div class="container" style="padding-top: 20px">
        <h1>Editar empleado</h1>
    </div>
    <div class="container">
        <div class="card" style="width: 80rem;">
        <div class="card-body">
        <form method="post" action="{{ asset(url('/users/'.$user->id)) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Apellido</label>
                <input type="text" class="form-control" id="last_name"  name="last_name" value="{{ $user->last_name }}">
            </div>
            <div class="row justify-content-around">
                <div class="col-2">
                    <label for="exampleFormControlSelect1">Tipo de documento</label>
                    <select class="form-control" id="type_document" name="type_document">
                        @if ($user->type_document === "CC")
                            <option selected>CC</option>
                            <option>NIT</option>

                        @else
                            <option selected>NIT</option>
                            <option>CC</option>

                        @endif
                        
                    </select>
                </div>
                <div class="col-10">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Número de documento</label>
                        <input type="number" class="form-control" id="document" name="document" value="{{ $user->document }}">
                    </div>
                </div>
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                <small id="emailHelp" class="form-text text-muted">Utiliza tu correo personal</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Fecha de admision</label>
                <div class="input-group date sb-date">
                    @php
                              $fecha = str_split($user->admission_date,10);
                          @endphp
                              
                    <input type="text" id="admission_date" name="admission_date" class="form-control" value="{{ $fecha[0] }}"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
            </div>
            <div class="form-group">
                <label>Salario</label>
                <input type="number" class="form-control" id="salary" name="salary" value="{{ $user->salary }}">
            </div>
            <div class="row justify-content-center">
                <div class="col-1">
                    <a href="{{ url('/users/')}}">
                        <button type="submit" class="btn btn-danger">Cancelar</button>
                    </a>
                </div>
                <div class="col-2">
                    <button type="submit" name="action" class="btn btn-success">Editar empleado</button>
                </div>
            </div>
            
        </form>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="/resources/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="/libs/bootstrap-datepicker/css/bootstrap-datepicker.css">
    
    <script>
        $('.sb-date').datepicker({
            format: "dd/mm/yyyy"
        });
    </script>
  </body>
</html>