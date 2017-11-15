<nav class="navbar admin-navigation">
               
               
               <ul class="navbar-nav nav">
                   <li><a href="/blog">Blog</a></li>
                   <li><a href="/admin">Admin</a></li>
               </ul>
                
                    
                <ul class="nav navbar-nav navbar-right">
                        @if(Auth::check())
                            <li><a href="">{{ auth()->user()->name }}</a></li>
                            <li><a href="/logout" class="button is-danger">Logout</a></li>
                        @else
                            <li><a href="/login">Login</a></li>
                        @endif
                    </ul>
</nav>