<!doctype html>
<html lang="en">
  <style>
    .floating-btn {
      width: 70px;
      height: 70px;
      background: #32CD32;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      border-radius: 50%;
      color: #ffffff;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25);
      position: fixed;
      right: 40px;
      bottom: 60px;


    }
    #btn-floa {
      font-size: 40px;
    }
    .sb-title{
      margin-top: 2rem;
      margin-left: 450px;
      height: 6rem;
    }
  </style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Proyecto prueba Vortex Front-end</title>
  </head>
  <body>
    <div class="sb-title">
      <h1>Lista de empleados</h1>
    </div>
    {{-- <img src="icons/bootstrap.svg" width="32" height="32" title="Bootstrap"> --}}
    
    {{-- <svg width="100" height="100" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.646 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
      </svg> --}}
    @if (session()->has('msjc'))
        <div class="container">
        <div class="alert alert-success" role="alert">
            Usuario creado correctamente
        </div>
    </div>
    @endif
    @if (session()->has('msje'))
    <div class="container">
        <div class="alert alert-primary" role="alert">
            Usuario editado correctamente
        </div>
    </div>
    @endif
    @if (session()->has('msjd'))
    <div class="container">
    <div class="alert alert-danger" role="alert">
        Usuario eliminado correctamente
    </div>
    </div>
    @endif
    <div class="table-responsive-lg" style="padding-left: 30px; padding-right: 50px; ">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Tipo de documento</th>
                <th scope="col">Documento</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Email</th>
                <th scope="col">Fecha de admisión</th>
                <th scope="col">Salario</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)   
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>
                            <a href="{{ url('/users/'.$user->id) }}">
                                {{ $user->first_name }}
                            </a>
                        </td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->type_document }}</td>
                        <td>{{ $user->document }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                          @php
                              $fecha = str_split($user->admission_date,10);
                          @endphp
                              {{ $fecha[0] }}
                        </td>
                        <td>$ {{ $user->salary }}</td>
                        <td>
                            <div class="row justify-content-center">
                                <div class="col-4">
                                <a href="{{ asset(url('/users/'.$user->id.'/edit')) }}">
                                    <button type="button" class="btn btn-success">Editar</button>
                                </a>
                                </div>
                                <div class="col-4">
                                <form method="post" action="{{ asset(url('/users/'.$user->id)) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar este usuario?')">Eliminar</button>
                                </form>
                                </div>
                            </div>
                            {{-- <a title="Edit" href="{{ asset(url('/users/'.$user->id.'/edit')) }}"><i class="material-icons">mode_edit &nbsp;</i></a> --}}
                            {{-- <a title="Delete" id="delete" class="modal-trigger" href="#modalds" onclick="borrar({{$user}})"><i class="material-icons">delete_forever</i></a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          {{-- <div class="mx-auto" style="width: 200px;">
            {{ $users->links() }}
          </div> --}}
          {{-- <div class="row justify-content-between">
            <div class="col-4"></div>
            <div class="col-4"></div>
            

              <div class="col-4"> --}}
                  {{-- <a href="{{route('users.create')}}"> --}}
                        {{-- <button type="button" class="btn btn-lg btn-primary">Crear un usuario</button> --}}
                        <a href="{{route('users.create')}}" class="floating-btn"><i id="btn-floa" class="material-icons">add</i></a>
                    
              {{-- </div>
          </div> --}}
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        window.setTimeout(function(){
          $('.alert').fadeTo(500,0).slideUp(300, function() {
            $(this).remove();
          });
        },3000);
      </script>
      
  </body>
</html>