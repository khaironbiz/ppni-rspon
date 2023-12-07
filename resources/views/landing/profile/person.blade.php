@extends('layout.landing')
@section('content')


    <section class="section single-speaker">
        <div class="container">
            <div class="block">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="image-block">
                            <img src="{{ $user->foto }}" class="img-fluid" alt="speaker">
                        </div>

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

                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="content-block">
                            <div class="name">
                                <h3>Biodata</h3>
                            </div>
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
                                <div class="col-8">{{ $user->gender_code->title }}</div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4"><label>TTL</label></div>
                                <div class="col-8">{{ $user->tempat_lahir }}, {{ $user->tanggal_lahir }}</div>
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
                                <div class="col-8">{{ $user->pendidikan_terahir }}</div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4"><label>Tempat Kerja</label></div>
                                <div class="col-8">{{ $user->tempat_kerja }}</div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4"><label>Jabatan</label></div>
                                <div class="col-8">{{ $user->tempat_kerja }}</div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4"><label>Profesi</label></div>
                                <div class="col-8">{{ $user->tempat_kerja }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h5>Riwayat Pendidikan</h5>
                <table class="table table-sm table-striped">
                    <thead>
                    <th>#</th>
                    <th>Jenjang</th>
                    <th>Nama Institusi</th>
                    <th>Tahun Lulus</th>
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
            <div class="row">
                <h5>Riwayat Pelatihan</h5>
                <table class="table table-sm table-striped">
                    <thead>
                    <th>#</th>
                    <th>Nama Kegiatan</th>
                    <th>Nama Penyelenggara</th>
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
            <div class="row">
                <h5>Riwayat Organisasi</h5>
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
            <div class="row">
                <h5>Riwayat Kerja</h5>
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
            <div class="row">
                <h5>Riwayat Penghargaan</h5>
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
            <a href="{{ route('auth.logout') }}" class="btn btn-main-md">Logout</a>

        </div>
    </section>

@endsection
