 <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="{{ asset('media/logo.png') }}" alt="" id="biglogo">
                    <img src="{{ asset('media/smalllogo.png') }}" alt="" id="smalllogo">
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-home"></i>
                            Dahboard
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Home 1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#postsSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-edit"></i>
                            Posts
                        </a>
                        <ul class="collapse list-unstyled" id="postsSubmenu">
                            <li><a href="/admin/posts">Alle posts</a></li>
                            <li><a href="/admin/posts/create">Ny post</a></li>
                        </ul>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Sider
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="/admin/pages">Alle sider</a></li>
                            <li><a href="/admin/pages/create">Lav ny</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin/users">
                            <i class="glyphicon glyphicon-user"></i>
                            Brugere
                        </a>
                    </li>
                    <li>
                        <a href="/admin/tags">
                            <i class="glyphicon glyphicon-tags"></i>
                            Tags
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-send"></i>
                            Contact
                        </a>
                    </li>
                </ul>
                <div class="sidebar-arrow-left sidebar-arrow">
                    <i class="glyphicon glyphicon-chevron-left"></i>
                </div>
                
                <div class="sidebar-arrow-right sidebar-arrow">
                    <i class="glyphicon glyphicon-chevron-right "></i>
                </div>
            </nav>