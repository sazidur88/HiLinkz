<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #161F37">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{asset('assets/images/favicon.png')}}" alt="SMET Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HiLinkz Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <a href="{{route('dashboard')}}"><img src="{{auth()->user()->photo_url != null ? url('storage/'.auth()->user()->photo_url) : asset('/assets/img/null/avatar.jpg')}}" class="img-circle elevation-2" alt="User Image"></a>
            </div>
            <div class="info">
                <a href="{{route('dashboard')}}" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-meteor"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('edit_user_profile')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            Edit Profile
                        </p>
                    </a>
                </li>
                @can('user-list')
                <li class="nav-item">
                    <a href="{{route('manage_users.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>
                            Manage Users
                        </p>
                    </a>
                </li>
                @endcan
                @can('role-list')
                <li class="nav-item">
                    <a href="{{route('manage_roles.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-secret"></i>
                        <p>
                            Manage Roles
                        </p>
                    </a>
                </li>
                @endcan
                <li class="nav-item">
                    <a href="{{ route('view_inbox_messages') }}" class="nav-link">
                    <i class="nav-icon fas fa-envelope"></i>
                        <p>
                        Inbox
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
