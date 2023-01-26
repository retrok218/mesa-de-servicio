<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa-de-Servicio</title>   
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    
</head>
<body>    
    <div class="contenedor" >  
        <div class="sidebar">
            @include('layouts/navbar/navbar')  
        </div>     
        <div class="principal">
            @include('layouts/header/header')
            @yield('content')
        </div>                               
    </div> 
@include('layouts/footer/foother')  



</body>
</html>