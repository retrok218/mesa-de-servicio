@extends('home')
@section('content')
<div class="migas">
            <ul class="breadcrumb_list">
                <li class="li-1"> <a href='/'><i class="bi bi-house-door"></i> Home</a></li>
                <li class="li-1"> <a href="{{ url("/contacto")}}"><i class="bi bi-telephone"></i>- <i class="bi bi-envelope"></i> Contacto</a></li>          
            </ul>
        </div>
<div class="shadow p-3 mb-5 bg-body rounded">
    <div class="col-sm-9 col-md-12 " >
        
        <div class="">
            <h3>La Mesa de Servicio está disponible y atenderá sus requerimientos:</h3>
            <ul>
                <li>Vía telefónica a los teléfonos 51342500,51342600 ext 5556, con 6 líneas.</li>
                <li>Vía correo electrónico en: mesadeservicio@finanzas.cdmx.gob.mx.</li>
                <li>Vía página web www.mesadeservicio.finanzas.cdmx.gob.mx.</li>
            </ul>
            <hr style="border-top: 3px solid rgb(162 15 59);">
            <pre>
                Mesa de Servicio
                DASI
                Secretaría de Administración y Finanzas del Gobierno de la Ciudad de México
                Dirección web: www.mesadeservicio.finanzas.cdmx.gob.mx
                E-mail: mesadeservicio@finanzas.cdmx.gob.mx
                Tel. 51342500,51342600 ext 5556, con 6 líneas.
                Horario de Atención: Lunes a Viernes de 8:00 hrs a 20:00 hrs
            </pre>
        </div>

    </div>
    </div>
@endsection