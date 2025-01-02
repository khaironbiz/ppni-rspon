<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light navbar-fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user-circle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="{{ route('user.profile.index') }}" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{ \Illuminate\Support\Facades\Auth::user()['foto'] }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                @php
                                    $profile_user = \Illuminate\Support\Facades\Auth::user();
                                @endphp
                                {{ $profile_user['nama_depan'] }} {{ $profile_user['nama_belakang'] }}
                            </h3>
                            <p class="text-sm">Last Activity</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <a href="{{ route('auth.logout') }}" class="dropdown-item dropdown-footer bg-info">Logout</a>
            </div>
        </li>
    </ul>
</nav>

