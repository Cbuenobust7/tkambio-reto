<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Reto TKAMBIO</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>
   <body>



<div class="navbar navbar-expand-lg bg-primary" id="navegador">
     <img class="logo-abbr" src="{{ asset('images/logo-tkambio.svg') }}">
      <ul>
         <li><h5> Reto </h5></li>
         <li> <a href="{{ route('cambios.index')}}">  LISTADO</a> </li>
         <li><a href="{{ route('cambios.create')}}" class="btn btn-primary btn-sm">Crear nuevo TC</a></li>
      </ul>
   </div>
</div>

      <div class="container">
         @yield('content')
      </div>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
   </body>
</html>