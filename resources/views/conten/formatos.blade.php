@extends('home')
@section('content')

        <div class="migas">
            <ul class="breadcrumb_list">
                <li class="li-1"> <a href='/'><i class="bi bi-house-door"></i> Home</a></li>
                <li class="li-1"> <a href='/formatos'><i class="bi bi-file-earmark-text"></i> Formatos</a></li>          
            </ul>
        </div>
        <div class="shadow p-3 mb-5 bg-body rounded">
    <div class=" formatos_down" >
    <a href="{{ url("media\descargables\Formato alta en cualquier sistema_3.xlsx")}}">
        <div class="formatos col-sm-9 col-md-12">            
             <i class="bi bi-file-earmark-text"></i> - Formato de Alta de Usuario en Cualquier Sistema             
        </div>
    </a>
    <a href="{{url("media\descargables\Solicitud claves para el acceso al Sistema de Control de Gestion_11.xlsx")}}">
        <div class="formatos col-sm-9 col-md-12">            
            <i class="bi bi-file-earmark-text"></i> - Solicitud claves para el acceso al Sistema de Control de Gestión                    
        </div>
        </a>
        <a href="{{url("media\descargables\Formato_Solicitud de Cuenta de Correo Electronico Personal_1.xlsx")}}">
        <div class=" formatos col-sm-9 col-md-12">            
            <i class="bi bi-file-earmark-text"></i> - Solicitud de Cuenta de Correo Electrónico Personal 
            
        </div>
        </a>
        <a href="{{url("media\descargables\Solicitud de Cuenta de Correo Masivo.xlsx")}}">
        <div class="formatos col-sm-9 col-md-12">
            
            <i class="bi bi-file-earmark-text"></i> - Formato de Cuenta de Correo Masivo 
            
        </div>
        </a>

        <a href="{{url("media\descargables\Formato_Solicitud de Cuenta de Correo Electronico de Area_1.xlsx")}}">
        <div class="formatos col-sm-9 col-md-12">
            
            <i class="bi bi-file-earmark-text"></i> - Solicitud de Cuenta de Correo Electrónico de área         
        </div>
        </a> 

        <a href="{{url("media\descargables\Formato-para-actualizar-informacion-de-cuenta-de-email-personal1.xlsx")}}">
            <div class=" formatos col-sm-9 col-md-12">
             <i class="bi bi-file-earmark-text"></i> - Formato para actualizar información de cuenta de e-mail (personal) 
            </div>
        </a>

        <a href="{{url("media\descargables\Formato_Solicitud de Baja Cuenta de Correo Electronico.xlsx")}}">
        <div class="formatos col-sm-9 col-md-12">
            
           <i class="bi bi-file-earmark-text"></i> - Formato Solicitud de Baja de Cuenta de Correo Electrónico 
            
        </div>
        </a>

        <a href="{{url("media\descargables\usuario_vpn.pdf")}}">
        <div class="formatos col-sm-9 col-md-12">
           
            <i class="bi bi-file-earmark-text"></i> - Solicitud de Cuenta de Usuario VPN
            
        </div>
        </a>

        <a href="{{url("media\descargables\Formato_Alta_Usuarios_Externo.pdf")}}">
        <div class=" formatos col-sm-9 col-md-12">
           
            <i class="bi bi-file-earmark-text"></i> - Formato de Alta de Usuarios GRP
            
        </div>
        </a>

        <a href="{{url("media\descargables\Formato de Alta de Usuario a la Mesa de Servicio_7.xlsx")}}">
        <div class=" formatos col-sm-9 col-md-12">
            
            <i class="bi bi-file-earmark-text"></i> - Formato de Alta de Usuario a la Mesa de Servicio
            
        </div>
        </a>
        <a href="{{url("media\descargables\Formato-de-solicitud-de-soporte-tecnico_5.xlsx")}}">
        <div class="formatos col-sm-9 col-md-12">
            
           <i class="bi bi-file-earmark-text"></i> - Formato de Solicitud de Soporte Técnico
           
        </div>
        </a>
        <a href="{{url("media\descargables\Formato-de-solicitud-de-redes_6.xlsx")}}">
        <div class=" formatos col-sm-9 col-md-12">            
        <i class="bi bi-file-earmark-text"></i> - Formato de Solicitud de Redes
         
        </div>
        </a>
        <a href="{{url("media\descargables\Formato-de-solicitud-de-Infraestructura.xlsx")}}">
        <div class="formatos col-sm-9 col-md-12">            
            <i class="bi bi-file-earmark-text"></i> - Formato de Solicitud de Infraestructura
           
        </div>
        </a>
        </div>
    </div>


@endsection