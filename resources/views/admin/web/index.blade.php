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
        <div class="card-header bg-info">
            @include('admin.menu.master')
        </div>

        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#staticBackdrop">
                Add Web
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-dark">
                            <h5 class="modal-title" id="staticBackdropLabel">Create New Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('admin.web.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">

                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Nama Web</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="nama_web">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Singkatan</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="singkatan">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Logo</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="logo">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>URL</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="url">
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="alamat">
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

            <table id="example1" class="table table-bordered table-striped table-sm mt-2">
                <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Nama Web</th>
                    <th>Singkatan</th>
                    <th>URL</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($webs as $data)

                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_web }}</td>
                        <td>{{ $data->singkatan }}</td>
                        <td>{{ $data->url }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->alamat }}</td>

                        <td>
                            <a href="{{ route('admin.web.show', ['id'=>$data->id]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

