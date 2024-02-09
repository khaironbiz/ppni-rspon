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
        <div class="card-header bg-info">
            @include('user.profile.menu.profile')
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
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>NIK</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->nik }}
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>Gender</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->gender_code->title }}
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>Tanggal Lahir</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->tempat_lahir }}, {{ $user->tanggal_lahir }}
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>Status Pernikahan</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->alamat }}
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>Alamat</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->alamat }}
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>Email</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>HP</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->nomor_telepon }}
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>Tempat Kerja</b>
                        </div>
                        <div class="col-md-10">
                            {{ $user->alamat }}
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>Status Pekrjaan</b>
                        </div>
                        <div class="col-md-10">

                        </div>
                    </div>
                    <div class="row mb-1">
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
        <div class="card-footer">
            <a href="{{ route('user.profile.edit') }}" class="btn btn-sm btn-success">Edit Profile</a>
        </div>

    </div>

@endsection

