@extends('home')
@section('content')
    <div class="migas">
            <ul class="breadcrumb_list">
                <li class="li-1"> <a href='/'><i class="bi bi-house-door"></i> Home</a></li>
                <li class="li-1"> <a href='/manuales'><i class="bi bi-book "></i> Manuales</a></li>          
            </ul>
        </div>
    <div class=" formatos_down" >
    <a href="{{url("public\media\descargables\manual-de-cambio-de-contrasena-09052019.pdf")}}">
        <div class="formatos col-sm-9 col-md-12">            
             <i class="bi bi-book"></i> - Cambio de Contraseña de Correo Electrónico. 
            
        </div>
        </a>
        <a href="{{url("public\media\descargables\configuracion-de-correos-electronicos-en-microsoft-outlook-20166.pdf")}}">
        <div class="formatos col-sm-9 col-md-12">
            
            <i class="bi bi-book"></i> - Configuración de correos electrónicos en Microsoft Outlook 2016. 
            
        </div>
        </a>

        <a href="{{url("public\media\descargables\configuracion-de-correos-electronicos-en-microsoft-outlook-20076.pdf")}}">
        <div class=" formatos col-sm-9 col-md-12">
            
            <i class="bi bi-book"></i> - Configuración de correos electrónicos en Microsoft Outlook 2007. 
                  
        </div>
        </a>
        <a href="{{url("public\media\descargables\manual-para-respaldo-de-correos-electronicos-por-medio-de-outlook-de-escritorio1.pdf")}}">
        <div class="formatos col-sm-9 col-md-12">
            
            <i class="bi bi-book"></i> - Manual para respaldo de correos electrónicos por medio de Outlook de escritorio. 
        
        </div>
        </a>
        <a href="{{url("public\media\descargables\manual-para-la-creacion-de-reglas-para-guardar-correos-electronicos-en-la-pc1.pdf")}}">
        <div class="formatos col-sm-9 col-md-12">
            
           <i class="bi bi-book"></i> - Manual para la creación de reglas para guardar correos electrónicos en la PC
        
        </div>
        </a>
        
    
    </div>

@endsection