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
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#internal">
                Internal
            </button>
            <button type="button" class="btn btn-danger mb-2" data-toggle="modal" data-target="#external">
                External
            </button>
            <!-- Internal -->
            <div class="modal fade" id="internal" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ route('user.file.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title" id="staticBackdropLabel">Upload File</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <b>Nama Dokumen</b>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <b>file</b>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="file">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- external -->
            <div class="modal fade" id="external" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ route('user.file.store.external') }}" method="post">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title" id="staticBackdropLabel">Upload File</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <b>Nama Dokumen</b>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <b>Id File</b>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="file_id">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <b>Sumber File</b>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="file_type">
                                            <option>Youtube</option>
                                            <option>Canva</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <table class="table table-bordered table-striped table-sm mt-2" id="example1">
                <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Title</th>
                    <th>Jenis File</th>
                    <th>Size</th>
                    <th>View</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($files as $data)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->file_type }}</td>
                        <td>{{ number_format($data->size) }}</td>
                        <td>
                            <a href="{{ route('user.file.show.view', ['id' => $data->id]) }}"
                               class="btn btn-sm btn-info">View</a>
                        </td>
                        <td>
                            <a href="{{ route('user.file.show', ['id'=>$data->id]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
