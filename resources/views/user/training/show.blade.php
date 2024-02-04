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
        <div class="card-header">
            <b>{{ $title }}</b>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Training Name</b>
                </div>
                <div class="col-md-10">
                    {{ $training->training->title }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Class Name</b>
                </div>
                <div class="col-md-10">
                    {{ $training->class->title }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Date</b>
                </div>
                <div class="col-md-10">
                    {{ $training->class->date_start }} sd {{ $training->class->date_finish }}
                </div>
            </div>
        </div>
        <div class="card-footer"></div>
    </div>


@endsection

