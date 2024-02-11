@extends('layout.admin')
@section('content')

    <div class="card ml-2">
        <div class="card-header bg-info">
            @include('admin.class.menu.class_menu')
        </div>
        <div class="card-body">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Waktu</th>
                    <th>Materi</th>
                    <th>Pengajar</th>
                    <th>JPL</th>
                </tr>
                </thead>
                <tbody>
                @foreach($schedules as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->start }}</td>
                        <td>{{ $data->module->title }}</td>
                        <td>{{ $data->user->nama_depan }} {{ $data->user->nama_belakang }}</td>
                        <td>{{ $data->module->jpl }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
        <div class="card-footer">

        </div>
    </div>

@endsection

