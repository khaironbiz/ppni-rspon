@extends('layout.user')
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

    <div class="card ml-2 mr-2">
        <div class="card-header">
            <h6>{{ $file->title }}</h6>
        </div>
        <div  style="position: relative; width: 100%; height: 0; padding-top: 56.2500%; padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;border-radius: 8px; will-change: transform;"">
            <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                    src="https://www.canva.com/design/{{ $file->file_name }}/view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
            </iframe>
        </div>

        <div class="card-footer">
            <a href="{{ route('user.file.index') }}" class="btn btn-danger">Back</a>
        </div>
    </div>


@endsection
