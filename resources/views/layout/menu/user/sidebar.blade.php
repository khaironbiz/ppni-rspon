<?php
use Illuminate\Support\Facades\Auth;
$foto = \Illuminate\Support\Facades\Auth::user()['foto']
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(Auth::user()['foto'] == null)
                    <?php
                    $url = "https://file.atm-sehat.com/storage/image/ZQC6SOX05hA0enLhvPWrEfVxMv9zzm9Sc7qp2EQO.jpg";
                    ?>
                @else
                    <?php
                        $url = Auth::user()['foto'];
                    ?>
                @endif
                    <img src="{{ $url }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()['nama_depan'] }} {{ Auth::user()['nama_belakang'] }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('user.profile.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-user-circle text-info"></i>
                        <p class="text">Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.training.mine.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-university text-primary"></i>
                        <p class="text">Trainings</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-graduation-cap text-success"></i>
                        <p class="text">MOT</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-cog text-warning"></i>
                        <p class="text">TOC</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-book text-info"></i>
                        <p class="text">Pembicara</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-cogs text-success"></i>
                        <p class="text">Panitia</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.file.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-file text-success"></i>
                        <p class="text">Berkas</p>
                    </a>
                </li>
                @if(Auth::user()->role_code->title == 'Super Admin')
                    <li class="nav-item">
                        <a href="{{ route('admin.class.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-server text-warning"></i>
                            <p class="text">Admin</p>
                        </a>
                    </li>
                @endif

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

