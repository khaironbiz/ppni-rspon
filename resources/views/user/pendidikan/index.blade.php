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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addEducation">
                Add Data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addEducation" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Riwayat Pendidikan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

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
                                                <option value="{{ $db->id }}">{{ $db->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <b>Pendidikan</b>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="pendidikan_id" id="pendidikan_id"></select>
                                    </div>
                                    <script>
                                        $(document).ready(function () {
                                            $('#jenis_pendidikan').change(function () {
                                                var jenis_pendidikan = $(this).val();

                                                $.ajax({
                                                    url: '/master/pendidikan/child/' + jenis_pendidikan,
                                                    type: 'GET',
                                                    dataType: 'json',
                                                    success: function (data) {
                                                        $('#pendidikan_id').empty();

                                                        $.each(data.pendidikan, function (key, value) {
                                                            $('#pendidikan_id').append('<option value="' + value.id + '">' + value.title + '</option>');
                                                        });
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <b>Nama Instansi</b>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="nama_instansi" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <b>Nomor Ijazah</b>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="nomor_ijazah" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <b>Tahun Masuk</b>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" name="tahun_masuk" class="form-control" required>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Tahun Keluar</b>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" name="tahun_keluar" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <b>Nama Penandatangan Ijazah</b>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="nama_penandatangan_ijazah" class="form-control"
                                               required>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-sm table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Jenis</th>
                    <th>Level</th>
                    <th>Institusi</th>
                    <th>Periode</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user_education as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->code_pendidikan->parent->title }}</td>
                        <td>{{ $data->code_pendidikan->title }}</td>
                        <td>{{ $data->nama_institusi }}</td>
                        <td>{{ date('Y', strtotime($data->tahun_masuk)) }}
                            sd {{ date('Y', strtotime($data->tahun_keluar)) }}</td>
                        <td>
                            <a href="{{ route('user.pendidikan.show', ['id'=>$data->id]) }}" class="btn btn-sm btn-success">Edit</a>
                        </td>
                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>

    </div>

@endsection

