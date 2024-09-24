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
            @include('admin.menu.training')
        </div>
        <div class="card-header">
            <b>{{ $title }}</b>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Training Name</b>
                </div>
                <div class="col-md-10">
                    {{ $training->title }}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#update{{ $training->slug }}">
                Update
            </button>
            <!-- Modal -->
            <div class="modal fade" id="update{{ $training->slug }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="staticBackdropLabel">Update Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('admin.training.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Training Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="hidden" class="form-control" name="id" value="{{ $training->id }}">
                                        <input type="text" class="form-control" name="title" value="{{ $training->title }}">
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
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
                Delete
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-black">
                            <h5 class="modal-title" id="staticBackdropLabel">Delete Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('admin.training.destroy') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <input type="checkbox" required value="{{ $training->id }}" name="id"> Saya Setuju menghapus data ini
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
            <b>Versi Kurikulum</b>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                Add New Data
            </button>
            <!-- Modal -->
            <div class="modal fade" id="create" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title" id="staticBackdropLabel">Membuat Versi Kurikulum Pelatihan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('admin.curriculum_version.store') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Curriculum Version</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="hidden" class="form-control" name="training_id" value="{{ $training->id }}">
                                        <input type="text" class="form-control" name="title">
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

            <table class="table table-striped table-sm mt-1">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Versi Kurikulum</th>
                    <th>Detaill</th>
                </tr>
                </thead>
                <tbody>
                @foreach($curriculumVersion as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->title }}</td>
                        <td>
                            <a href="{{ route('admin.curriculum_version.show', ['slug'=>$data->slug]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>


        </div>
    </div>
    <div class="card ml-2">
        <div class="card-header">
            <b>Type Soal</b>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createTrainingQuestion">
                Add New Data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="createTrainingQuestion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-dark">
                            <h5 class="modal-title" id="staticBackdropLabel">Membuat Tipe Soal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('admin.training.question.store') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Training Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="training_id">
                                            <option value="{{ $training->id }}">{{ $training->title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-4">
                                        <label>Nama Soal</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title">
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
                    <th>Nama Soal</th>
                    <th>Count</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($training_question as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->title }}</td>
                    <td></td>
                    <td>
                        <a href="{{ route('admin.training.question.show',['id'=>$data->id]) }}" class="btn btn-info btn-sm">Detail</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('admin.training.index') }}" class="btn btn-warning mt-3">Back</a>

        </div>
    </div>

@endsection

