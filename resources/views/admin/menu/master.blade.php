<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="{{ route('admin.code.index') }}">Codes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="#">Parent Code</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Child Code</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.web.index') }}">Webs</a>
            </li>

        </ul>
    </div>
</nav>
