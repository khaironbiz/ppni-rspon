<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="{{ route('user.profile.index') }}">Profile</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @if($sub_class == 'Pendidikan') {{ "Active" }} @else {{ "" }} @endif">
                <a class="nav-link" href="{{ route('user.profile.pendidikan') }}">Pendidikan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pekerjaan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Organisasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Alamat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dokumen Legal</a>
            </li>
            <li class="nav-item @if($class == 'Files') {{ "Active" }} @endif">
                <a class="nav-link" href="{{ route('user.file.index') }}">Berkas</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
