<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mesa-de-Servicio</title>   
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  

    
</head>
<body>    
    <div class="contenedor" >  
        <div class="sidebar">
            @include('layouts/navbar/navbar')  
        </div>     
        <div class="principal">
            @include('layouts/header/header')            
            @yield('content')
            @include('layouts/footer/foother')
        </div>                               
    </div> 
  



</body>
</html>