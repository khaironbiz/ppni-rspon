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
        <div class="card-header">
            {{ session('danger') }}
            <a href="{{ route('admin.class.create') }}" class="btn btn-primary">Add New Class</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Event Name</th>
                    <th>Class</th>
                    <th>Date Start</th>
                    <th>Date Finish</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($classEvent->count()>0)
                @foreach($classEvent as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->event->title }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->date_start }}</td>
                        <td>{{ $data->date_finish }}</td>
                        <td>
                            <a href="{{ route('admin.class.show', ['slug'=>$data->slug]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection

