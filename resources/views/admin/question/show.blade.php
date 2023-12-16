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
        <div class="card-header">
            <b>{{ $title }}</b>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <b>Tipe Soal</b>
                        </div>
                        <div class="col-md-10">
                            {{ $question->training_question->title }}
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-2">
                            <b>Video</b>
                        </div>
                        <div class="col-md-10">
                            {{ $question->youtube_id_video }}
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <b>Question</b>
                        </div>
                        <div class="col-md-10">
                            {{ $question->title }}
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <b>Jawaban Benar</b>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control">
                                <option>Belum ada jawaban</option>
                                @foreach($answer as $data)
                                    <option @if($data->id == $question-> id_jawaban) {{ "selected" }}@endif>{{ $data->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                @if(!empty($question->youtube_id_video))
                    <div class="col-md-6">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$question->youtube_id_video}}?si=rMWbKB9H6wajujSs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                @endif

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
                        <form method="post" action="{{ route('admin.question.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Question</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="hidden" class="form-control" name="id" value="{{ $question->id }}">
                                        <input type="text" class="form-control" name="title" value="{{ $question->title }}">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Youtube</label>
                                    </div>
                                    <div class="col-md-8">

                                        <input type="text" class="form-control" name="youtube_id_video" value="{{ $question->youtube_id_video }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Answer</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="id_jawaban" required>
                                            <option value="">----pilih----</option>
                                            @foreach($answer as $data)
                                                <option value="{{ $data->id }}" @if($data->id == $question->id_jawaban) {{ "selected" }}@endif>{{ $data->title }}</option>
                                            @endforeach
                                        </select>
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
                        <form action="{{ route('admin.question.delete') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <input type="checkbox" required value="{{ $question->id }}" name="id"> Saya Setuju menghapus data ini
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
            <b>Answer</b>
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
                            <h5 class="modal-title" id="staticBackdropLabel">Membuat Jawaban Soal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('admin.answer.store') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Question</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="question_id" required>
                                            <option value="{{ $question->id }}">{{ $question->title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Value</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="value" value="0">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Answer</label>
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

            <table class="table mt-1 table-sm table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Answer</th>
                    <th>Value</th>
                    <th>Detaill</th>
                </tr>
                </thead>
                <tbody>
                @foreach($answer as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->value }}</td>
                        <td>
                            <a href="{{ route('admin.answer.show', ['id'=>$data->id]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('admin.training.question.show', ['id'=>$question->training_question->id]) }}" class="btn btn-warning mt-3">Back</a>



        </div>
    </div>


@endsection

