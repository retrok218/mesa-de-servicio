@extends('home')
@section('content')
    <div class="migas">
            <ul class="breadcrumb_list">
                <li class="li-1"> <a href='/'><i class="bi bi-house-door"></i> Home</a></li>
                <li class="li-1"> <a href='/infografias'><i class="bi bi-file-earmark-medical"></i> Infografias</a></li>          
            </ul>
        </div>
        <div class="shadow p-3 mb-5 bg-body rounded">
    <div class=" formatos_down" >
    <a href="{{url("public\media\descargables\infografia_manual_soporte_tecnico_8.pdf")}}">
        <div class="formatos col-sm-9 col-md-12">            
            <i class="bi bi-file-earmark-medical"></i> - Manual de Agente de Sistemas  
            
        </div>
        </a>
        <a href="{{url("public\media\descargables\infografia_manual_soporte_tecnico_9_1.pdf")}}">
        <div class="formatos col-sm-9 col-md-12">
            
            <i class="bi bi-file-earmark-medical"></i> - Manual de Soporte Técnico / Infraestructura para Mesa de Servicio 
        </div>
        </a>
        <a href="{{url("public\media\descargables\infografia_manual_Usuario_7_1.pdf")}}">
        <div class=" formatos col-sm-9 col-md-12">
            
           <i class="bi bi-file-earmark-medical"></i> - Manual de Usuario para Mesa de Servicio  
            
        
        </div>
        </a>
        
        
    
        </div>
    </div>

@endsection