<nav>
        <div class="nav-wrapper blue">
            <div class="container">
                <a href="{{ route('admin.principal')}}" class="brand-logo">Sistema de Administração</a>
                <a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        
                <ul class="right hide-on-med-and-down">
                                
                                <li><a href="{{ route('admin.principal')}}">Inicio</a></li>

                                 <li><a target="blank" href="{{ route('site.home')}}">Site</a></li>

                                @if(Auth::guest())

                                     <li><a href="{{ route('admin.login')}}">Login</a></li>
                                 @else
                                    <li><a href="#">{{Auth::user()->name }}</a></li>
                                    <li><a href="{{ route('admin.login.sair')}}">Sair</a></li>
                                 @endif

                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="{{ route('admin.principal')}}">Inicio</a></li>

                    <li><a target="blank" href="{{ route('site.home')}}">Site</a></li>

                     @if(Auth::guest())

                                     <li><a href="{{ route('admin.login')}}">Login</a></li>
                                 @else
                                    <li><a href="#">{{Auth:: user()->name }}</a></li>
                                    <li><a href="{{ route('admin.login.sair')}}">Sair</a></li>
                                 @endif
                </ul>
            </div>
        </div>
</nav>