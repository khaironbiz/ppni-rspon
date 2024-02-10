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
        <div class="card-header bg-dark">
            <b>{{ $title }}</b>
        </div>
        <div class="card-body bg-gray">
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Curriculum</b>
                </div>
                <div class="col-md-10">{{ $module->curriculum->title }}</div>

            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Metode Pembelajaran</b>
                </div>
                <div class="col-md-10">{{ $module->code->title }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Nama Module</b>
                </div>
                <div class="col-md-10">{{ $module->title }}</div>
            </div>


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#update">
                Update
            </button>
            <!-- Modal -->
            <div class="modal fade" id="update" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="staticBackdropLabel">Update Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('admin.curriculum.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama Pelajaran</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="hidden" class="form-control" name="id" value="{{ $module->id }}">
                                        <input type="text" class="form-control" name="title"
                                               value="{{ $module->title }}">
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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                Delete
            </button>
            <!-- Modal -->
            <div class="modal fade" id="delete" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-black">
                            <h5 class="modal-title" id="staticBackdropLabel">Delete Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('admin.module.delete') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <input type="checkbox" required value="{{ $module->id }}" name="id"> Saya Setuju
                                menghapus data ini
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card ml-2">
        <div class="card-header">
            <b>Attachment</b>
        </div>
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFile">
                Attachment
            </button>
            <!-- Modal -->
            <div class="modal fade" id="addFile" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah File</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('admin.module_attachment.store') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <b>Module</b>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="module_id">
                                            <option value="{{ $module->id }}">{{ $module->title }} </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <b>Berkas</b>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="file_id">
                                            <option>----</option>
                                            @foreach($files as $f)
                                                <option value="{{ $f->id }}">{{ $f->title }}</option>
                                            @endforeach
                                        </select>
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
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Berkas</th>
                    <th>Tipe Berkas</th>
                    <th>Hit</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($attachment as $data)
                    @php
                    $filename= "AGmdlOulSVXtGhnCHU9OQNMbtKpy8HDleza2EVMC.pdf";
                    @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->file->title }}</td>
                        <td>{{ $data->file_type }}</td>
                        <td></td>
                        <td>
                            @if($data->file_type == 'file')
                                <a href="{{ route('admin.module_attachment.download',['id'=>$data->id]) }}"
                                   class="btn btn-sm btn-info" target="_blank">Unduh</a>
                            @else
                                <a href="{{ route('admin.module_attachment.show',['id'=>$data->id]) }}"
                                   class="btn btn-sm btn-info">Show</a>
                            @endif

                            @include('admin.module.modal.delete')


                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('admin.curriculum.show', ['id'=>$module->curriculum->id]) }}" class="btn btn-warning mt-3">Back</a>
        </div>
    </div>

@endsection

