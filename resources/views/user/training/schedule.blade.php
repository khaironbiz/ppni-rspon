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
    <div class="card ml-2">
        <div class="card-header bg-dark">
            @include('user.training.menu.training_detail')
        </div>
        <div class="card-body">
            @include('admin.class.embed.tabel_jadwal')
        </div>
    </div>

@endsection

