<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa-de-Servicio</title>   
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}" />   
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> 
  
    
</head>
<body>    
@include('layouts/header/header')
@include('layouts/navbar/navbar')    
    <div class="contenido" >           
                 @yield('content')
    </div>                           
</body>
</html>