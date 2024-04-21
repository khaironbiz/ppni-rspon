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
                            {{ $users->total() }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 mb-2">
                                    <form action="">
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="keyword" placeholder= @if(isset($_GET['keyword'])) {{ $_GET['keyword'] }} @else {{ "Search..." }} @endif >
                                            <div class="input-group-prepend">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm">
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
                                        @php
                                            $number = $paginator->firstItem();
                                        @endphp
                                        @foreach($paginator as $data)
                                            <tr class="@if($data->migrate == true) {{ "bg-success" }}@endif">
                                                <td>{{ $number++ }}</td>
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
                                </div>
                            </div>

                            @if($paginator->hasPages())
                                <div class="row">
                                    <div class="col-md-6  text-right">
                                        @include('pagination.bs4')
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <small>Showing {{ number_format($paginator->firstItem()) }} to {{ number_format($paginator->lastItem()) }} of {{ number_format($paginator->total())  }}</small>
                                    </div>


                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

