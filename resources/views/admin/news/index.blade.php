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
            @include('admin.menu.news')
        </div>
        <div class="card-header">
            <a href="{{ route('admin.news.create') }}" class="btn btn-primary">Add News</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>View</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $data)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->category->title }}</td>
                        <td>{{ $data->view }}</td>
                        <td>
                            <a href="{{ route('admin.news.edit', ['id'=>$data->id]) }}" class="btn btn-sm btn-success">Edit</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

