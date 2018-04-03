
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>@yield('titulo') + Section</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/seccionesPag.css') }}" rel="stylesheet">
    <script type="text/javascript" href="{{ asset('js/app.js') }}"></script>
  </head>

  <body>

    <header> 
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Administrar Contactos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
  
              <a class="nav-link" href="{{ url('contactos/listar') }}" > Contactos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('contacto/crear') }}"> Crear</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Detalle</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

   <?php 
       /* <!-- Begin page content -->
        <!-- En esta parte es donde vamos a tener el contenido -->
        <!-- usamos la directiva @yield() y le pasamos como argumento el nombre de la seccion -->
        <!-- Indicamos cualquier nombre como argumento en este caso Contenido -->
        <!-- Luego para usar usamos @section('Contenido')  @endsection se le pasa como argumento el --><!-- minmo el mismo parametro declarado en  @yield('Contenido') --> */ 
    ?>

    <main role="main" class="container">

        <div class="row mt-3">

              <div class="col-10">

                  @yield('Contenido')

              </div>
<?php 
//como queremos mostrar el contenido de la seccion aqui (MyLayout.blade.php)
//no Cerramos con @endsectio sino con @show y le damos un nombre cualquiera a la seccion
 ?>
              <div class="col-2">
<?php 
//Si queremos sobreescribir esta seccion en otra vista vasta con nombrar la seccion
// y reemplazar el contenido ejemplo
/*
@section('NuevaSeccion')
                         <h1>Otro contenido </h1>
@endsection 

*/
 ?>
                    @section('NuevaSeccion')
                         <h1>Barra Lateral</h1>
                     @show
              </div>

        </div>




                    @section('Boton')

                    @show


    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Administrar Contactos ...</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
