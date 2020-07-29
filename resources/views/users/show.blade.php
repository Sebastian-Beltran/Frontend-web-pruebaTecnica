<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Usuario</title>
  </head>
  <body>
    <div class="container" style="height: 4rem;">
    </div>
      <div class="container">
        {{-- <h2>Usuario #{{ $user->id }}</h2> --}}
      </div>
      <div class="container">
          
          <div class="card" style="width: 45rem;">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-6">
                      <h3 class="card-title"><b>{{$user->first_name}} {{$user->last_name}}</b></h3>
                    </div>
                    <div class="col-2">
                        <svg width="70px" height="70px" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                          <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                        </svg>
                    </div>
                  </div>
                {{-- <h5><b>Apellido:</b> {{$user->last_name}}</h5> --}}
                <hr>
                <h5><b>Tipo de documento:</b>  {{$user->type_document}}</h5>

                <h5><b>Número de documento:</b>  {{$user->document}}</h5>
                <h5><b>Email:</b>  {{$user->email}}</h5>
                <h5><b>Telefono:</b>  {{$user->phone}}</h5>
                <a href="{{ asset(url('/users/'.$user->id.'/edit')) }}">
                    <button type="button" class="btn btn-primary">Editar</button>
                </a>
          </div>
        </div>
      </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>