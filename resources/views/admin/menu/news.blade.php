<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="{{ route('admin.news.index') }}">News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.event.index') }}">News Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.class.index') }}">News Tag</a>
            </li>
            <li class="nav-item @if($class == 'News') {{ "Active" }} @endif">
                <a class="nav-link" href="{{ route('admin.topic.index') }}">Authors</a>
            </li>
        </ul>
    </div>
</nav>
