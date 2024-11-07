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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 mb-2">
                                    <form action="">
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="keyword" placeholder="Search..."   value="@if(isset($_GET['keyword'])) {{ $_GET['keyword'] }} @endif">
                                            <div class="input-group-prepend">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>NIRA</th>
                                            <th>KTP</th>
                                            <th>Email</th>
                                            <th>HP</th>
                                            <th>Detail</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $number = 1;
                                        @endphp
                                        @foreach($enroll as $data)
                                            <tr class="@if($data->migrate == true) {{ "bg-success" }}@endif">
                                                <td>{{ $number++ }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->nira }}</td>
                                                <td>{{ $data->nik }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->hp }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#staticBackdrop{{ $data->id }}">
                                                        Migrate
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="staticBackdrop{{ $data->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <form action="{{ route('hipeni.store') }}" method="post">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row mb-1">
                                                                            <label class="col-sm-2 col-form-label">NIK</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="number" class="form-control" name="nik" value="{{ $data->nik }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-1">
                                                                            <label class="col-sm-2 col-form-label">Nama</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="name" value="{{ $data->nama }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-1">
                                                                            <label class="col-sm-2 col-form-label">Gender</label>
                                                                            <div class="col-sm-10">
                                                                                <select class="form-control" name="gender" id="gender" required>
                                                                                    <option value="">---pilih---</option>
                                                                                    <option value="PRIA">Pria</option>
                                                                                    <option value="WANITA">Wanita</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-1">
                                                                            <label class="col-sm-2 col-form-label">Email</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="email" class="form-control" name="email" value="{{ $data->email }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-1">
                                                                            <label class="col-sm-2 col-form-label">HP</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="number" class="form-control" name="hp" value="{{ $data->hp }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-1">
                                                                            <label class="col-sm-2 col-form-label">NIRA</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="number" class="form-control" name="nira">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-1">
                                                                            <label class="col-sm-2 col-form-label">DPW</label>
                                                                            <div class="col-sm-10">
                                                                                <select class="form-control" name="id_provinsi" id="id_provinsi">
                                                                                    <option value="">---pilih---</option>
                                                                                    @foreach ($provinsi as $db)
                                                                                        <option value="{{ $db->id_prov }}">{{ $db->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                                <small>{{ $data->provinsi }}</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-1">
                                                                            <label class="col-sm-2 col-form-label">DPD</label>
                                                                            <div class="col-sm-10">
                                                                                <select class="form-control" name="id_kota" id="id_kota"></select>
                                                                                <small>{{ $data->kota }}</small>
                                                                                <script>
                                                                                    $(document).ready(function() {
                                                                                        $('#id_provinsi').change(function() {
                                                                                            var jenis_pendidikan = $(this).val();

                                                                                            $.ajax({
                                                                                                url: '/kota/' + jenis_pendidikan,
                                                                                                type: 'GET',
                                                                                                dataType: 'json',
                                                                                                success: function(data) {
                                                                                                    $('#id_kota').empty();

                                                                                                    $.each(data.cities, function(key, value) {
                                                                                                        $('#id_kota').append('<option value="' + value.id_kota + '">' + value.name + '</option>');
                                                                                                    });
                                                                                                }
                                                                                            });
                                                                                        });
                                                                                    });
                                                                                </script>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
