@extends('layout.user')
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

        </div>

        <div class="card-body">

            <table id="example1" class="table table-bordered table-striped table-sm mt-2">
                <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Child Number</th>
                    <th>Sub</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($enrolls as $data)

                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $data->training->title }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->child_number }}</td>
                        <td></td>
                        <td>
                            <a href="{{ route('user.training.mine.show', ['id'=>$data->id]) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

