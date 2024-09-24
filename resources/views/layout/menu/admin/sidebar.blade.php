<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(empty(Auth::user()['foto']))
                    <img src="https://ppni.or.id/simk/id/image/foto/31720126348.jpg" class="img-circle elevation-2" alt="User Image">
                @else
                    <img src="{{ Auth::user()['foto'] }}" class="img-circle elevation-2" alt="User Image">
                @endif

            </div>
            <div class="info">
                @if(auth()->check())
                    <a href="#" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()['nama_depan'] }}</a>
                @endif


            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('user.profile.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p class="text">Profile</p>
                    </a>
                </li>
                <li class="nav-header">Admin Area</li>
                <li class="nav-item">
                    <a href="{{ route('admin.code.parent') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p class="text">Codes</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.training.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-success"></i>
                        <p class="text">Trainings</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-primary"></i>
                        <p class="text">Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.web.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p class="text">Webs</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('auth.logout') }}" class="nav-link">

                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

