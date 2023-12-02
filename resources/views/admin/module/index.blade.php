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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                Add New Data
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
                        <form method="post" action="{{ route('admin.module.store') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Curiculum</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="curriculum_id" required>
                                            @foreach($curricula as $data)
                                                <option value="{{ $data->id }}">{{ $data->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Module</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title" required>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>JPL</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="jpl" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label>Metode</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="metode" required>
                                            <option value="">----pilih----</option>
                                            @foreach($methode as $data)
                                                <option value="{{ $data->id }}">{{ $data->title }}</option>
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
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Training Name</th>
                    <th>Date Start</th>
                    <th>Date Finish</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($modules as $data)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->date_start }}</td>
                        <td>{{ $data->date_finish }}</td>
                        <td>
                            <a href="{{ route('admin.training.show', ['slug'=>$data->slug]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

