@extends('layout.landing')
@section('content')


    <section class="section single-speaker">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif(session('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            @endif
            <div class="card mb-2">
                <div class="card-header">
                    <div class="name">
                        <h5>Biodata</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <div class="image-block">
                                <img src="{{ $user->foto }}" class="img-fluid" alt="speaker">
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-7">
                            <div class="content-block">
                                <div class="row mb-1">
                                    <div class="col-4"><label>Nama</label></div>
                                    <div class="col-8">{{ $user->nama_depan }} {{ $user->nama_belakang }}</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-4"><label>NIK</label></div>
                                    <div class="col-8">{{ $user->nik }}</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-4"><label>Gender</label></div>
                                    <div class="col-8">
                                        @if($user->gender != null) {{ $user->gender_code->title }}@endif
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-4"><label>TTL</label></div>
                                    <div class="col-8">{{ $user->tempat_lahir }}, {{ $user->tanggal_lahir }}</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-4"><label>Agama</label></div>
                                    <div class="col-8">@if($user->agama != null){{ $user->agama_code->title }}@endif</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-4"><label>Status Pernikahan</label></div>
                                    <div class="col-8">@if($user->status_menikah != null){{ $user->status_menikah_code->title }}@endif</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-4"><label>Email</label></div>
                                    <div class="col-8">{{ $user->email }}</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-4"><label>Phone</label></div>
                                    <div class="col-8">{{ $user->nomor_telepon }}</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-4"><label>Pendidikan Terahir</label></div>
                                    <div class="col-8">@if($user->pendidikan !=null) {{ $user->pendidikan_code->title }} @endif</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-4"><label>Tempat Kerja</label></div>
                                    <div class="col-8">{{ $user->tempat_kerja }}</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-4"><label>Status Pekerjaan</label></div>
                                    <div class="col-8">
                                        @if($user->status_pekerjaan != null) {{ $user->status_pekerjaan_code->title }} @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#staticBackdrop">
                        Update Foto
                    </button>
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Update Foto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('landing.profile.update.foto') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Foto</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" name="foto">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success mt-2" data-toggle="modal" data-target="#update_profile">
                        Update Profile
                    </button>
                    <div class="modal fade" id="update_profile" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header bg-success">
                                    <h5 class="modal-title" id="staticBackdropLabel">Update Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('landing.profile.update') }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Nama Depan</label>
                                                <input type="text" class="form-control" name="nama_depan" value="{{ $user->nama_depan }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Nama Belakang</label>
                                                <input type="text" class="form-control" name="nama_belakang" value="{{ $user->nama_belakang }}" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Nomor KTP</label>
                                                <input type="number" class="form-control" name="nik" value="{{ $user->nik }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Agama</label>
                                                <select class="form-select form-select-lg" name="agama" required>
                                                    <option value="" class="form-control">----pilih------</option>
                                                    @foreach($agama as $data)
                                                        <option value="{{ $data->id }}" @if($user->agama === $data->id){{ "selected" }}@endif>{{ $data->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Gender</label>
                                                <select class="form-select form-select-lg" name="gender" required>
                                                    <option value="">----pilih------</option>
                                                    @foreach($gender as $data)
                                                        <option value="{{ $data->id }}" @if($user->gender === $data->id){{ "selected" }}@endif>{{ $data->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Status Pernikahan</label>
                                                <select class="form-select form-select-lg" name="status_menikah" required>
                                                    <option value="">----pilih------</option>
                                                    @foreach($status_pernikahan as $data)
                                                        <option value="{{ $data->id }}" @if($user->status_menikah === $data->id){{ "selected" }}@endif>{{ $data->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" value="{{ $user->tempat_lahir }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="text" class="form-control" name="email" value="{{ $user->email }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Nomor Telepon</label>
                                                <input type="text" class="form-control" name="nomor_telepon" value="{{ $user->nomor_telepon }}" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Pendidikan Terahir</label>
                                                <select class="form-select form-select-lg" name="pendidikan" required>
                                                    <option value="">----pilih------</option>
                                                    @foreach($pendidikan as $data)
                                                        <option value="{{ $data->id }}" @if($user->pendidikan === $data->id){{ "selected" }}@endif>{{ $data->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Pekerjaan</label>
                                                <select class="form-select form-select-lg" name="status_pekerjaan" required>
                                                    <option value="">----pilih------</option>
                                                    @foreach($pekerjaan as $data)
                                                        <option value="{{ $data->id }}" @if($user->status_pekerjaan === $data->id){{ "selected" }}@endif>{{ $data->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card mb-2">
                <div class="card-header">
                    <h5>Riwayat Pendidikan</h5>
                </div>
                <div class="card-body ">
                    <table class="table table-sm table-striped">
                        <thead>
                        <th>#</th>
                        <th>Jenjang</th>
                        <th>Nama Institusi</th>
                        <th>Tahun Lulus</th>
                        </thead>
                        <tbody>
                        @foreach($user_education as $ue)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ue->code_pendidikan->title }}</td>
                                <td>{{ $ue->nama_institusi }}</td>
                                <td>{{ date('Y', strtotime($ue->tahun_keluar)) }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-header">
                    <h5>Riwayat Pelatihan</h5>
                </div>
                <div class="card-body ">
                    <table class="table table-sm table-striped">
                        <thead>
                        <th>#</th>
                        <th>Nama Kegiatan</th>
                        <th>Nama Penyelenggara</th>
                        <th>Tanggal Sertifikat</th>
                        <th>Detail</th>
                        </thead>
                        <tbody>
                        @foreach($training_enroll as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->class->title }}</td>
                                <td></td>
                                <td></td>
                                <td><a href="{{ route('user.training.mine.show',['id'=>$data->id]) }}" class="btn btn-sm btn-info" target="_blank">Detail</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-header">
                    <h5>Riwayat Organisasi</h5>
                </div>
                <div class="card-body ">
                    <table class="table table-sm table-striped">
                        <thead>
                        <th>#</th>
                        <th>Nama Organisasi</th>
                        <th>Jabatan/Posisi</th>
                        <th>Periode</th>
                        <th>Detail</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-header">
                    <h5>Riwayat Kerja</h5>
                </div>
                <div class="card-body ">
                    <table class="table table-sm table-striped">
                        <thead>
                        <th>#</th>
                        <th>Nama Instansi</th>
                        <th>Jabatan</th>
                        <th>Periode</th>
                        <th>Detail</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-header">
                    <h5>Riwayat Penghargaan</h5>
                </div>
                <div class="card-body ">
                    <table class="table table-sm table-striped">
                        <thead>
                        <th>#</th>
                        <th>Nama Instansi</th>
                        <th>Jenis Penghargaan</th>
                        <th>Tanggal Sertifikat</th>
                        <th>Detail</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <a href="{{ route('auth.logout') }}" class="btn btn-main-md">Logout</a>
        </div>
    </section>



@endsection
