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
            @include('user.menu.profile')
        </div>
        <div class="card-body">

            <div>
                <form action="{{ route('user.pendidikan.store') }}" method="post" id="my-form">
                    @csrf
                    <div class="modal-body">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <div class="row mb-1">
                            <div class="col-md-4">
                                <b>Jenis Pendidikan</b>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" name="jenis_pendidikan" id="jenis_pendidikan">
                                    <option value="">---pilih---</option>
                                    @foreach ($db_pendidikan as $db)
                                        <option value="{{ $db->id }}" @if($db->id == $user_education->code_pendidikan->parent_id) {{ "selected" }} @endif>{{ $db->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="row mb-1">
                            <div class="col-md-4">
                                <b>Pendidikan</b>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" name="pendidikan_id" id="pendidikan_id">
                                    <option value="{{ $user_education->jenjang_pendidikan_id }}">{{ $user_education->code_pendidikan->title }}</option>
                                </select>
                            </div>

                        </div>
                        <div class="row mb-1">
                            <div class="col-md-4">
                                <b>Nama Instansi</b>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nama_instansi" class="form-control" required value="{{ $user_education->nama_institusi }}">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-4">
                                <b>Nomor Ijazah</b>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nomor_ijazah" class="form-control" required value="{{ $user_education->nomor_ijazah }}">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-4">
                                <b>Tahun Masuk</b>
                            </div>
                            <div class="col-md-3">
                                <input type="date" name="tahun_masuk" class="form-control" required value="{{ $user_education->tahun_masuk }}">
                            </div>
                            <div class="col-md-2">
                                <b>Tahun Keluar</b>
                            </div>
                            <div class="col-md-3">
                                <input type="date" name="tahun_keluar" class="form-control" required value="{{ $user_education->tahun_keluar }}">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-4">
                                <b>Nama Penandatangan Ijazah</b>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nama_penandatangan_ijazah" class="form-control" required value="{{ $user_education->nama_penandatangan_ijazah }}">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-danger" href="{{ route('user.pendidikan') }}">Back</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>


        </div>

    </div>

@endsection

