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
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#staticBackdrop">
                Add Task
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
                        <form method="post" action="{{ route('admin.task.store') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Jenis Tugas</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="jenis_tugas" required>
                                            <option value="">-----pilih----</option>
                                            @foreach($jenis_tugas as $data)
                                            <option value="{{ $data->id }}">{{ $data->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Class</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="class_event_id" required>
                                            <option value="">-----pilih----</option>
                                            @foreach($class_event as $data)
                                                <option value="{{ $data->id }}">{{ $data->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Pelatih</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="teacher_id" required>
                                            <option value="">-----pilih----</option>
                                            @foreach($pelatih as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama_depan }} {{ $data->nama_belakang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Waktu</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="datetime-local" class="form-control" name="date_start">
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <b>Sampai</b>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="datetime-local" class="form-control" name="date_finish">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Description</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="description" required></textarea>
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

            <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Class Name</th>
                    <th>Jenis Tugas</th>
                    <th>Pelatih</th>
                    <th>Waktu</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($task as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->class->title }}</td>
                        <td>{{ $data->code->title }}</td>
                        <td>{{ $data->user->nama_depan }} {{ $data->user->nama_belakang }}</td>
                        <td>{{ $data->date_start }} - {{ $data->date_finish }}</td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">Detail</a>
                        </td>
                    </tr>
                @endforeach


                </tbody>

            </table>
        </div>
    </div>

@endsection

