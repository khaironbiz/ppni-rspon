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
    <div class="card ml-2">
        <div class="card-header bg-info">

        </div>

        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#staticBackdrop">
                Add Code
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
                        <form method="post" action="{{ route('admin.code.store') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Urutan</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="urutan" value="{{ $codes->count()+1 }}">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Code</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="code">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Code Title</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Description</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="description"></textarea>
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
                    <th>Code</th>
                    <th>Title</th>
                    <th>Child Number</th>
                    <th>Sub</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($codes as $data)

                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $data->code }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->child_number }}</td>
                        <td></td>
                        <td>
                            <a href="{{ route('admin.code.show', ['id'=>$data->id]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

