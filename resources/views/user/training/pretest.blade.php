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
        <div class="card-header bg-dark">
            @include('user.training.menu.training_detail')
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($pre_test as $data)
                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-header">
                                {{ $data->jenis_tugas_code->title }}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <b>Nama Dosen</b>
                                    </div>
                                    <div class="col-md-8">
                                        {{ $data->user->nama_depan }} {{ $data->user->nama_belakang }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <b>Jam Mulai</b>
                                    </div>
                                    <div class="col-md-8">
                                        {{ $data->date_start }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection

