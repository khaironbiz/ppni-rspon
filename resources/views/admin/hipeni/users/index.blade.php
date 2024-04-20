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

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.topic.create') }}" class="btn btn-primary">Add Topic</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>NIRA</th>
                                        <th>KTP</th>
                                        <th>Email</th>
                                        <th>HP</th>
                                        <th>Detail</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hipeni as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->nira }}</td>
                                            <td>{{ $data->noktp }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->hp }}</td>
                                            <td>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $hipeni->onEachSide(3)->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

