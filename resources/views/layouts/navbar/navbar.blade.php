
    <div class="wrapper">
        <div class="sidebar">
        <img src="{{URL::asset('media/img/logo3.png')}}" class="logo3">
            <aside>      
                <div class="row nav" style="margin: 0 0 5em 0;">
                    <div class="">
                        <p><i class="bi bi-person-circle" style="color: white; "></i> - INGRESA COMO ADMINISTRADOR (AGENTE) DE UN SERVICIO</p>
                        <li class="ulcdmx"><a href="http://10.1.130.42/otrs/index.pl" >Ingresa como AGENTE al Sistema de Tickets</a></li>
                        <hr>
                    </div>
                    <div class="">
                        <p> <i class="bi bi-person " style="color: white; "></i> - LEVANTA O CONSULTA EL SEGUIMIENTO DE UN REPORTE</p>
                        <li class="ulcdmx"><a href="http://10.1.130.42/otrs/customer.pl">Ingresa como USUARIO al Sistema de Tickets</a></li>
                        <hr>
                    </div>
                    <div class="">
                        <p> <i class="bi bi-file-earmark-text"></i> - FORMATOS</p>
                        <li class="ulcdmx"><a  href="{{ route("formatos") }}" >Formatos</a></li>
                        <hr>
                    </div>
                    <div class="">
                        <p> <i class="bi bi-book"></i> - MANUALES</p>
                        <li class="ulcdmx"><a  href="{{ route("manuales") }}" >Manuales Correo Electrónico</a></li>
                        <hr>
                    </div>
                    <div class="">
                        <p> <i class="bi bi-play-btn-fill"></i> - VIDEO-TUTORIALES</p>
                        <li class="ulcdmx"><a   href="{{ route("videotuto")}}">Video-Tutoriales</a></li>
                        <hr>
                    </div>
                    <div class=""> 
                        <p> <i class="bi bi-file-earmark-medical"></i> - INFOGRAFÍAS</p>
                        <li class="ulcdmx"><a href="{{ route("infogra")}}">Infografías</a></li>
                        <hr>
                    </div>
                    <div class=""> 
                        <p><i class="bi bi-telephone"></i> / <i class="bi bi-envelope"></i> - CENTRO DE ATENCIÓN A USUARIOS</p>
                        <li class="ulcdmx"><a href="{{ route("contacto")}}">Contacto</a></li>
                    </div>        
                </div>                                                                               
            </aside>          
        </div>
    </div>


