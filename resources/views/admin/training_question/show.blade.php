@extends('layout.admin')
@section('content')
    @if(session('success'))
        <div class="alert alert-success mr-2 ml-2">
            {{ session('success') }}
        </div>
    @elseif(session('danger'))
        <div class="alert alert-danger mr-2 ml-2">
            {{ session('danger') }}
        </div>
    @endif
    <div class="card mr-2 ml-2">
        <div class="card-header">
            <b>{{ $title }}</b>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Training Name</b>
                </div>
                <div class="col-md-10">
                    {{ $trainingQuestion->title }}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#update">
                Update
            </button>
            <!-- Modal -->
            <div class="modal fade" id="update" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="staticBackdropLabel">Update Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('admin.training.question.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Training Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="hidden" class="form-control" name="id" value="{{ $trainingQuestion->id }}">
                                        <input type="text" class="form-control" name="title" value="{{ $trainingQuestion->title }}">
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
                                <input type="checkbox" required value="{{ $trainingQuestion->id }}" name="id"> Saya Setuju menghapus data ini
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
    <div class="card mr-2 ml-2">
        <div class="card-header">
            <b>Soal</b>
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
                            <h5 class="modal-title" id="staticBackdropLabel">Membuat Soal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('admin.question.store') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Training</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="training_id">
                                            <option value="{{ $trainingQuestion->training->id }}">{{ $trainingQuestion->training->title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Tipe Soal</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="training_question_id">
                                            <option value="{{ $trainingQuestion->id }}">{{ $trainingQuestion->title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Materi Terkait</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="curriculum_id" required>
                                            <option value="">---pilih---</option>
                                            @foreach($curriculum as $data )
                                            <option value="{{ $data->id }}">{{ $data->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Youtube</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="youtube_id_video">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Soal</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="title" required></textarea>
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

            <table class="table mt-1 table-sm table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Question</th>
                    <th>Video</th>
                    <th>Detaill</th>
                </tr>
                </thead>
                <tbody>
                @foreach($question as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->youtube_id_video }}</td>
                        <td>
                            <a href="{{ route('admin.question.show', ['id'=>$data->id]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('admin.training.show', ['slug'=>$trainingQuestion->training->slug]) }}" class="btn btn-warning mt-3">Back</a>

        </div>
    </div>

@endsection

