@extends('home')
@section('content')
    <div class="migas">
            <ul class="breadcrumb_list">
                <li class="li-1"> <a href='/'><i class="bi bi-house-door"></i> Home</a></li>
                <li class="li-1"> <a href='/video-tutorial'><i class="bi bi-play-btn-fill"></i> Video-Tutoriales</a></li>          
            </ul>
        </div>
           
        <div class="formatos col-sm-9 col-md-12 " >    
            <div class="conteiner">
                <h3 style="color: white; "><i class="bi bi-play-btn-fill"></i> - Video-Tutorial para ingresar al correo institucional a través de OWA en un navegador web.</h3>                             
                <video width="100%" height="80%" controls  poster="{{URL::asset('public/media/img/portada_outlook.JPG')}}">>
                    <source src="{{URL::asset("public/media/descargables/Manual OWAv2.mp4")}}" type="video/mp4">                
                    Your browser does not support the video tag.
                </video> 
            </div>        
                
        </div>
    
@endsection