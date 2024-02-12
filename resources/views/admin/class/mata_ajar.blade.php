@extends('layout.admin')
@section('content')

    <div class="card ml-2">
        <div class="card-header bg-info">
            @include('admin.class.menu.class_menu')
        </div>
        <div class="card-body">
            @include('admin.class.embed.mata_ajar')
        </div>
        <div class="card-footer">

        </div>
    </div>

@endsection

