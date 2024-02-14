<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('user.training.mine.index') }}">My Trainings</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.training.mine.next') }}">Next Training </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.training.mine.current') }}">Current Training</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.training.mine.order') }}">Order Training</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Market</a>
            </li>
        </ul>
    </div>
</nav>
