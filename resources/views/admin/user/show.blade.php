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
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Urutan</b>
                </div>
                <div class="col-md-10">
                    {{ $code->urutan }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Code</b>
                </div>
                <div class="col-md-10">
                    {{ $code->code }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Title</b>
                </div>
                <div class="col-md-10">
                    {{ $code->title }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Description</b>
                </div>
                <div class="col-md-10">
                    {{ $code->description }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Parent ID</b>
                </div>
                <div class="col-md-10">
                    @if($code->parent_id != null)
                        {{ $code->parent->title }}
                    @endif

                </div>

            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Child Number</b>
                </div>
                <div class="col-md-10">
                    {{ $code->child_number }}

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
                        <form method="post" action="{{ route('admin.code.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Urutan</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="hidden" class="form-control" name="id" value="{{ $code->id }}">
                                        <input type="text" class="form-control" name="urutan" value="{{ $code->urutan }}">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Code</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="code" value="{{ $code->code }}">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Title</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title" value="{{ $code->title }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Description</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="description">{{ $code->description }}</textarea>
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
                        <form action="{{ route('admin.code.delete') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <input type="checkbox" required value="{{ $code->id }}" name="id"> Saya Setuju menghapus data ini
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
            <b>Child Code</b>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                Add Child Code
            </button>
            <!-- Modal -->
            <div class="modal fade" id="create" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="staticBackdropLabel">Update Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{ route('admin.code.child_store') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Parent</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control" name="parent_id">
                                            <option value="{{ $code->id }}">{{ $code->title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Urutan</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="urutan" value="{{ $code->child_number+1 }}">
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
                                        <label>Title</label>
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

            <table class="table table-sm mt-1">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Parent</th>
                    <th>Code</th>
                    <th>Title</th>
                    <th>Child Number</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($child_codes as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->parent->title }}</td>
                        <td>{{ $data->code }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->child_number }}</td>
                        <td>
                            <a href="{{ route('admin.code.show', ['id'=>$data->id]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @if($code->parent_id == null)
                <a href="{{ route('admin.code.parent') }}" class="btn btn-warning mt-3" >Back</a>
            @else
                <a href="{{ route('admin.code.show', ['id'=>$code->parent_id]) }}" class="btn btn-warning mt-3" >Back</a>
            @endif

        </div>
    </div>

@endsection

