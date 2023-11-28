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
        <div class="card-header">
            {{ session('danger') }}
            <a href="{{ route('admin.subjectStudy.create') }}" class="btn btn-primary">Add New Subject</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Kode</th>
                    <th>Mata Ajar</th>
                    <th>Class</th>
                    <th>Pengampu</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($subject_study as $data)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $data->kode_mata_ajar }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->class_event_id }}</td>
                        <td>{{ $data->pengampu }}</td>
                        <td>
                            <a href="{{ route('admin.subjectStudy.show', ['slug'=>$data->slug]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

