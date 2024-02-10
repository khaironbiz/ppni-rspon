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

    <div class="card ml-2 mr-2 h-100">
        <div class="card-header">
            <h6>{{ $file->title }}</h6>
        </div>
        <div id="scroller">
            <iframe class="w-100" width="560" height="315"   name="myiframe" id="myiframe" src="{{ $file->url }}" width=\"100%\" style=\"height:100%\"></iframe>
        </div>

        <div class="card-footer">
            <a href="{{ route('user.file.index') }}" class="btn btn-danger">Back</a>
        </div>
    </div>


@endsection
