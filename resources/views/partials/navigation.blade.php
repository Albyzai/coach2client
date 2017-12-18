<nav class="navbar navbar-fixed-top nav-main">
               <div class="container">
                <a href="/">
                    <img src="{{ asset('media/logo.png') }}" alt="C2C logo" class="logo">
                    <img src="{{ asset('media/logo-black.png') }}" alt="C2C logo" class="logo-black">
                </a>


               <ul class="navbar-nav nav">

               </ul>


                <ul class="nav navbar-nav navbar-right main-menu">
                            <a class="nav-link" href="/blog"><li class="menu-item {{ set_active('blog') }}">Blog</li></a>
                            <a class="nav-link" href="/admin"><li class="menu-item {{ set_active('admin') }}">Admin</li></a>
                        @if(Auth::check())

                            {{-- <a class="nav-link" href="/profile"><li class="menu-item {{ set_active('profile') }}">{{ auth()->user()->name }}</li></a> --}}

                            <a class="nav-link" href="/profile" >
                            <li class="menu-item" id="nav-login">
                            <i class="glyphicon glyphicon-user white-text"></i>
                            Profil
                            </li></a>

                            <a class="nav-link" href="/logout">
                            <li class="menu-item" id="nav-logout">
                            <i class="glyphicon glyphicon-log-out white-text"></i>
                            Logout
                            </li></a>
                        @else
                           <a class="nav-link" href="/register">
                            <li class="menu-item" id="nav-register">
                            <i class="glyphicon glyphicon-user white-text"></i>
                            Tilmeld
                            </li>
                            </a>
                            <a class="nav-link" href="/login">
                            <li class="menu-item" id="nav-login">
                            <i class="glyphicon glyphicon-log-in white-text"></i>
                            Login
                            </li>
                            </a>
                        @endif
                    </ul>
                </div>
</nav>
