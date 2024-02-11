<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="{{ route('admin.class.show', ['slug'=>$class_event->slug]) }}">Deskripsi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link @if($sub_class == 'Mata Ajar') {{ "active" }} @endif" href="{{ route('admin.class.mata_ajar', ['slug'=>$class_event->slug]) }}">Mata Ajar <span class="sr-only">(current)</span></a>
            <a class="nav-link @if($sub_class == 'Schedules') {{ "active" }} @endif" href="{{ route('admin.class.jadwal', ['slug'=>$class_event->slug]) }}">Jadwal</a>
            <a class="nav-link" href="#">Materi</a>
            <a class="nav-link" href="#">Peserta</a>

        </div>
    </div>
</nav>
