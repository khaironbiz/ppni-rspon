@extends('layout.admin')
@section('content')

    <div class="card ml-2">

        <div class="card-header bg-info">
            @include('admin.menu.news')
        </div>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @elseif(session('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('danger') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                + New Data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title" id="staticBackdropLabel">Create New Data</h5>
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
                                            <option value="{{ $code_news_category->id }}">{{ $code_news_category->title }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-md-4">
                                        <label>Urutan</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="urutan" value="{{ $news_categories->count()+1 }}">
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
                                        <label>News Category</label>
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


        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Code</th>
                    <th>Category</th>
                    <th>Count</th>
                    <th>Viewer</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($news_categories as $data)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $data->code }}</td>
                        <td>{{ $data->title }}</td>
                        <td></td>
                        <td></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('admin.newsCategory.edit',['id'=>$data->id]) }}">Detail</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit{{$data->id}}">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="edit{{$data->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="post" action="{{ route('admin.code.update', ['id'=>$data->id]) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="row mb-1">
                                                    <div class="col-md-4">
                                                        <label>Parent</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="parent_id">
                                                            <option value="{{ $code_news_category->id }}">{{ $code_news_category->title }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-md-4">
                                                        <label>Urutan</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="number" class="form-control" name="urutan" value="{{ $data->urutan }}">
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-md-4">
                                                        <label>Code</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="code" value="{{ $data->code }}">
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-md-4">
                                                        <label>News Category</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="title" value="{{ $data->title }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Description</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" name="description">{{ $data->description }}</textarea>
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
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

