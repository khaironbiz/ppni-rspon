<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="{{ route('admin.training.index') }}">Training</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link @if($sub_class=="Curricula") {{ "active" }} @endif" href="{{ route('admin.curriculum_version.index') }}">Curricula</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.event.index') }}">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.class.index') }}">Class</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($sub_class=="Subject Study") {{ "active" }} @endif" href="{{ route('admin.subjectStudy.index') }}">Mata Ajar</a>
            </li>
            <li class="nav-item @if($class == 'Files') {{ "Active" }} @endif">
                <a class="nav-link" href="{{ route('admin.topic.index') }}">Topic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.task.index') }}">Tugas</a>
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
