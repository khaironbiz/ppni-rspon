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
        <div class="card-header bg-info">
            @include('admin.menu.code')
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-2">
                            <b>Nama Web</b>
                        </div>
                        <div class="col-md-10">
                            {{ $web->nama_web }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Singkatan</b>
                        </div>
                        <div class="col-md-10">
                            {{ $web->singkatan }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Url</b>
                        </div>
                        <div class="col-md-10">
                            {{ $web->url }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Email</b>
                        </div>
                        <div class="col-md-10">
                            {{ $web->email }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Phone</b>
                        </div>
                        <div class="col-md-10">
                            {{ $web->phone }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Alamat</b>
                        </div>
                        <div class="col-md-10">
                            {{ $web->alamat }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>PIC</b>
                        </div>
                        <div class="col-md-10">
                            {{ $web->pic->nama_depan }} {{ $web->pic->nama_belakang }}

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Visi</b>
                        </div>
                        <div class="col-md-10">
                            {{ $web->visi }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Misi</b>
                        </div>
                        <div class="col-md-10">
                            {{ $web->misi }}
                        </div>
                    </div>

                </div>
                <div class="col-md-2">
                    <img src="{{ $web->logo }}" class="img-thumbnail img-fluid w-75 rounded">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.web.index') }}" class="btn btn-danger">Back</a>
            <a href="{{ route('admin.web.edit', ['id'=>$web->id]) }}" class="btn btn-success">Edit</a>
        </div>

    </div>


@endsection

