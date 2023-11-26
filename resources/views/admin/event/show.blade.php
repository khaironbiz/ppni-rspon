@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <b>{{ $title }}</b>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Title</b>
                </div>
                <div class="col-md-10">
                    {{ $event->title }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Date</b>
                </div>
                <div class="col-md-10">
                    {{ $event->date_start }} SD {{ $event->date_finish }}
                </div>

            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Description</b>
                </div>
                <div class="col-md-10">
                    @php
                    echo $event->description
                    @endphp
                </div>

            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.event.edit', ['slug'=>$event->slug]) }}" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </div>

    </div>

@endsection

