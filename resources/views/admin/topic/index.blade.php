@extends('layout.admin')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header bg-info">
            @include('admin.menu.training')
        </div>
        <div class="card-header">
            <a href="{{ route('admin.topic.create') }}" class="btn btn-primary">Add Topic</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Topic</th>
                    <th>Metode</th>
                    <th>Durasi</th>
                    <th>Pengajar</th>
                    <th>Waktu</th>
                    <th>Detail</th>

                </tr>
                </thead>
                <tbody>
                @foreach($topics as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->metode }}</td>
                        <td>{{ $data->jpl }} JPL</td>
                        <td>{{ $data->pengajar }}</td>
                        <td>{{ date('d-m-Y', strtotime($data->time_open)) }} {{ date('H:i', strtotime($data->time_open)) }} sd {{ date('H:i', strtotime($data->time_close)) }}</td>
                        <td>
                            <a href="{{ route('admin.topic.show', ['slug'=>$data->slug]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
    </div>

@endsection

