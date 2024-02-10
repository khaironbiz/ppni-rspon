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
                    <b>Training Name</b>
                </div>
                <div class="col-md-10">
                    {{ $curriculum_version->training->title }}
                </div>

            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Curriculum Version</b>
                </div>
                <div class="col-md-10">
                    {{ $curriculum_version->title }}
                </div>
            </div>


        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#update{{ $curriculum_version->slug }}">
                Update
            </button>
            <!-- Modal -->
            <div class="modal fade" id="update{{ $curriculum_version->slug }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="staticBackdropLabel">Update Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('admin.curriculum_version.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Training Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="hidden" class="form-control" name="id" value="{{ $curriculum_version->id }}">
                                        <input type="text" class="form-control" name="title" value="{{ $curriculum_version->title }}">
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
            <div class="modal fade" id="delete" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-black">
                            <h5 class="modal-title" id="staticBackdropLabel">Delete Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('admin.curriculum_version.delete') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <input type="checkbox" required value="{{ $curriculum_version->id }}" name="id"> Saya Setuju menghapus data ini
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
            <b>Struktur Program</b>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addData">
                Add Data
            </button>
            <!-- Modal -->
            <div class="modal fade" id="addData" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah data kurikulum</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('admin.curriculum.store') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label>Kurikulum</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="curriculum_version_id">
                                            <option value="{{ $curriculum_version->id }}">{{ $curriculum_version->title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label>Nama Pelajaran</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label>Jenis Materi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="type" required>
                                            <option value="">------</option>
                                            <option value="Materi Dasar">Materi Dasar</option>
                                            <option value="Materi Inti">Materi Inti</option>
                                            <option value="Materi Penunjang">Materi Penunjang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label>JPL</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="jpl">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label>CANVA</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="canva"></textarea>
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
                    <th>Jenis Materi</th>
                    <th>Title</th>
                    <th>JPL</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($curriculum as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->type }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->jpl }}</td>
                        <td>
                            <a href="{{ route('admin.curriculum.show', ['id'=>$data->id]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3" class="text-center"><b>Total</b></td>
                    <td colspan="2"><b>{{ $curriculum->sum('jpl') }}</b></td>
                </tr>
                </tfoot>
            </table>
            <a href="{{ route('admin.training.show', ['slug'=>$curriculum_version->training->slug]) }}" class="btn btn-warning mt-3">Back</a>

        </div>

    </div>

@endsection

