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
        <h1>Crear empleado</h1>
    </div>
    <div class="container">
        <div class="card" style="width: 80rem;">
        <div class="card-body">
        <form method="post" action="{{ action('User\UserController@store') }}">
            {{ csrf_field() }}
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Tu nombre">
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" class="form-control" id="last_name"  name="last_name" placeholder="Tu apellido">
            </div>
            <div class="row justify-content-around">
                <div class="col-2">
                    <label>Tipo de documento</label>
                    <select class="form-control" id="type_document" name="type_document">
                        <option>CC</option>
                        <option>NIT</option>
                    </select>
                </div>
                <div class="col-10">
                    <div class="form-group">
                        <label>Número de documento</label>
                        <input type="number" class="form-control" id="document" name="document" placeholder="Numero de documento">
                    </div>
                </div>
              </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="tucorreo@example.com">
                <small id="emailHelp" class="form-text text-muted">Utiliza tu correo personal</small>
            </div>
            <div class="form-group">
                <label>Fecha de admision</label>
                <div class="input-group date sb-date">
                    <input type="date" id="admission_date" name="admission_date" class="form-control" placeholder="dd-mm-aaaa">
                </div>
            </div>
            <div class="form-group">
                <label>Telefono</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Ex: 3125544102">
            </div>
            <div class="form-group">
                <label>Salario</label>
                <input type="number" class="form-control" id="salary" name="salary" placeholder="Salario del empleado">
            </div>
            
            <div class="row justify-content-center">
                <div class="col-1">
                    <a href="{{ asset(url('/users/'))}}">
                        <button type="submit"  class="btn btn-danger">Cancelar</button>
                    </a>
                </div>
                <div class="col-2">
                    <button type="submit" name="action" class="btn btn-success">Crear empleado</button>
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