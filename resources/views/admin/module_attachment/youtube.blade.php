@extends('layout.admin')
@section('content')
    @if(session('success'))
        <div class="alert alert-success ml-2">
            {{ session('success') }}
        </div>
    @elseif(session('danger'))
        <div class="alert alert-danger ml-2">
            {{ session('danger') }}
        </div>
    @endif
    <div class="card ml-2">
        <iframe width="860" height="515" src="https://www.youtube.com/embed/{{ $attachment->file_name }}" allow="autoplay; clipboard-write; encrypted-media; gyroscope;  web-share" allowfullscreen></iframe>
    </div>


@endsection

