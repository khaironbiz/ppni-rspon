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
        <form action ="{{ route('user.profile.update') }}" method="post">
            @method('PUT')
            @csrf

        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-10">
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>Nama Depan</b>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="nama_depan" class="form-control" required value="{{ $user->nama_depan }}">
                        </div>
                        <div class="col-md-2">
                            <b>Nama Belakang</b>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="nama_belakang" class="form-control" required value="{{ $user->nama_belakang }}">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>NIK</b>
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="nik" class="form-control" required value="{{ $user->nik }}">
                            @error('nik')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <b>Gender</b>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="Gender">
                                <option>{{ $user->gender_code->title }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>Tempat Lahir</b>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="tempat_lahir" class="form-control" required value="{{ old('tempat_lahir', $user->tempat_lahir)  }}">
                            @error('tempat_lahir')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <b>Tanggal Lahir</b>
                        </div>
                        <div class="col-md-4">
                            <input type="date" name="tanggal_lahir" class="form-control" required value="{{ $user->tanggal_lahir }}">
                            @error('tanggal_lahir')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>Email</b>
                        </div>
                        <div class="col-md-4">
                            <input type="email" name="email" class="form-control" required value="{{ old('email', $user->email) }}">
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <b>HP</b>
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="nomor_telepon" class="form-control" required value="{{ $user->nomor_telepon }}">
                            @error('nomor_telepon')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>Tempat Kerja</b>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="tempat_kerja" class="form-control" required value="{{ old('tempat_kerja', $user->tempat_kerja) }}">
                            @error('tempat_kerja')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <b>Status Pekerjaan</b>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="jenis_pekerjaan" required>
                                <option value="">--------</option>
                                @foreach($jenis_pekerjaan as $data)
                                    <option>{{ $data->title }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-2">
                            <b>Status Pekerjaan</b>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control" name="status_menikah" required>
                                <option value="">------</option>
                                @foreach($stutus_menikah as $sm)
                                    <option>{{ $sm->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <img src="{{ $user->foto }}" class="img-thumbnail img-fluid w-75 rounded">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Save Data</button>
        </div>
        </form>

    </div>

@endsection

