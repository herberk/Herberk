<nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top" id="mainNav">
    <img  src="/storage/images/hb.png" width="23" height="23" />
    <a id="profit" class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
       </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                   {!! Form::select('ano',config('options.ano'),null, ['class'=>'form-control-sm py-1']) !!}
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-desktop" style=color:Tomato></i><strong>  Escritorio</strong></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-table" style=color:#3729fa></i> <strong> Tablas</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/locaciones') }}">Regiones Comunas Ciudades</a>
                        <a class="dropdown-item" href="{{ url('/giros') }}">Giros o Actividades SII</a>
                        <a class="dropdown-item" href="{{ url('/Tipo_atributo') }}">Tipos y descripcion</a>
                        <div class="dropdown-divider"></div>

                        {{--<a class="dropdown-item" href="{{ url('/contactos') }}">Lista de Contactos</a>--}}
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-building" style=color:#e4c40a></i>
                        <strong> Empresas</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('empresa/index')}}">Gestionar Empresas</a>
                        <a class="dropdown-item" href="{{ url('empresa/papelera')}}">Papelera Empresa</a>
                        <a class="dropdown-item" href="{{ url('creatempresa')}}">Nueva Empresa</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/contactos') }}">Lista de Contactos</a>
                        <a class="dropdown-item" href="{{ url('listasocios') }}">Lista de Socios</a>
                        <a class="dropdown-item" href="{{ url('bancos/index') }}">Lista de Bancos</a>
                        <a class="dropdown-item" href="{{ url('/juradas') }}">Lista de D.Juradas</a>
                        <a class="dropdown-item" href="{{ url('/infojuradas') }}">Lista Juradas por empresas </a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-archive" style=color:#80202b></i>
                        <strong> Archivos</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('file/show')}}">Lista archivos por empresas</a>
                        <a class="dropdown-item" href="{{ url('empresa/papelera')}}">Papelera Empresa</a>
                        <a class="dropdown-item" href="{{ url('creatempresa')}}">Nueva Empresa</a>


                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-file-excel" style=color:#acff9d></i><strong> Excel</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{ route('Exports',[$user='0',$pd='0']) }}">Listado Usuarios</a>
                        <a class="dropdown-item" href="{{ url('jurada/Exports') }}">Listado D. Juradas</a>
                        <a class="dropdown-item" href="{{ url('atributo/Exports') }}">Listado Atributos</a>
                        <a class="dropdown-item" href="{{ url('empresa/excel') }}">Listado de Empresas</a>
                        <a class="dropdown-item" href="{{ route('socioexcel') }}">Listado de Socios</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('#') }}">Lista de ...</a>
                        <a class="dropdown-item" href="{{ url('#') }}">Lista de...s</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user fa-fw" style=color:#116a0d></i><strong> Usuarios</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/usuarios') }}">Lista de Usuarios</a>
                        <a class="dropdown-item" href="{{ url('/usuarios/papelera') }}">Papelera de Usuarios</a>
                        <a class="dropdown-item" href="{{ url('/usuarios/nuevo') }}">Nuevo Usuario</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/habilidades') }}">Lista de Habilidades</a>
                        <a class="dropdown-item" href="{{ url('/profesiones') }}">Lista de Profesiones</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <a href="#" class="btn btn-outline-danger btn-sm"><i class="fa fa-map-marker"></i></a>
            <a href="ver-msge" class="btn btn-outline-dark btn-sm mx-1"><span class="badge badge-dark"> 10 </span> <i class="far fa-bell"></i></a>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else

                 <img src="/storage/avatars/{{ Auth::user()->avatar }}" width="25" height="23" class="img-circle" />
                    <li class="nav-item dropdown" >
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->nickname }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
                            <div class="row justify-content-center">
                               <img class="rounded-circle" src="/storage/avatars/{{ Auth::user()->avatar }}" width="100" height="100" />
                            </div>
                            <div class="row justify-content-center mt-4">
                                <p> {{ Auth::user()->name }}<p>
                            </div>
                            <div class="dropdown-divider"></div>
                                <div class="float-left">
                                    <a class="dropdown-item" href="{{ url('/profile') }}" >Ver Foto</a>
                                 </div>
                                <div class="float-right">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"> {{ __('Salir') }}  </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                    </li>
                @endguest
            </ul>
        </div>
</nav>

