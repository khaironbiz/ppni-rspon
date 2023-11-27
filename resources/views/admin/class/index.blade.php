@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
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
                @foreach($classEvent as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->event->title }}</td>
                        <td>{{ $data->date_start }}</td>
                        <td>{{ $data->date_finish }}</td>
                        <td></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

