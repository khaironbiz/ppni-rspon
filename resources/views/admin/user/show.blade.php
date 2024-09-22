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
            <b>{{ $title }}</b>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-2">
                            <b>Nama</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->nama_depan }} {{ $user->nama_belakang }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>NIK</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->nik }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Gender</b>
                        </div>
                        <div class="col-md-10">
                            @if($user->gender != null)
                                {{ $user->gender_code->title }}
                            @endif

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Tanggal Lahir</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->tempat_lahir }}, {{ $user->tanggal_lahir }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Email</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>HP</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->nomor_telepon }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Role</b>
                        </div>
                        <div class="col-md-10">
                            @foreach($user->roles as $role)
                                <span class="badge @if($user->role == $role->role_code) {{ "badge-danger" }} @else {{ "badge-primary" }} @endif">{{ $role->role->title  }}</span>
                            @endforeach

                        </div>
                    </div>

                </div>
                <div class="col-md-2">
                    <img src="{{ $user->foto }}" class="img-thumbnail img-fluid w-75 rounded">
                </div>
            </div>
        </div>

    </div>
    <div class="card ml-2">
        <div class="card-header">
            <b>Training</b>
        </div>
        <div class="card-body">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Training</th>
                    <th>Periode</th>
                </tr>
                </thead>
                <tbody>
                @foreach($enrolls as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->class->title }}</td>
                        <td>{{ $data->class->date_start }} sd {{ $data->class->date_finish }}</td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
    </div>


@endsection

