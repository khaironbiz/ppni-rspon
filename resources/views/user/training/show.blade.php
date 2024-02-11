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
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Nama Pelatihan</b>
                </div>
                <div class="col-md-10">
                    {{ $training->training->title }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Kelas Pelatihan</b>
                </div>
                <div class="col-md-10">
                    {{ $training->class->title }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Kurikulum</b>
                </div>
                <div class="col-md-10">
                    {{ $training->class->curriculumVersion->title}}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Tanggal Kegiatan</b>
                </div>
                <div class="col-md-10">
                    {{ $training->class->date_start }} sd {{ $training->class->date_finish }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Metode Pembelajaran</b>
                </div>
                <div class="col-md-10">
                    {{ $training->class->tempat }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Tempat</b>
                </div>
                <div class="col-md-10">
                    {{ $training->class->tempat }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>MOT</b>
                </div>
                <div class="col-md-10">
                    {{ $training->class->mot_user->nama_depan }} {{ $training->class->mot_user->nama_belakang }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>TOC</b>
                </div>
                <div class="col-md-10">
                    {{ $training->class->toc_user->nama_depan }} {{ $training->class->toc_user->nama_belakang }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>SKP</b>
                </div>
                <div class="col-md-10">

                </div>
            </div>

        </div>
        <div class="card-footer"></div>
    </div>
    <div class="card ml-2 mt-2">
        <div class="card-header bg-dark">
            <b>Struktur Pembelajaran</b>
        </div>
        <div class="card-body">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Materi</th>
                    <th colspan="2">JPL</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>A</td>
                    <td colspan="3"><b>Materi Dasar</b></td>
                </tr>
                @foreach($materi_dasar as $mat_das)
                    <tr>
                        <td class="text-right">{{ $loop->iteration }}</td>
                        <td>{{ $mat_das->title }}</td>
                        <td>{{ $mat_das->jpl }}</td>
                        <td>{{ $mat_das->module->sum('jpl') }}</td>
                    </tr>
                    @foreach($mat_das->module as $module)
                        <tr>
                            <td></td>
                            <td colspan="2">{{ $module->title }}</td>
                            <td>{{ $module->jpl }}</td>
                        </tr>
                    @endforeach
                @endforeach
                <tr>
                    <td>B</td>
                    <td colspan="3"><b>Materi Inti</b></td>
                </tr>
                @foreach($materi_inti as $mat_in)
                    <tr>
                        <td class="text-right">{{ $loop->iteration }}</td>
                        <td>{{ $mat_in->title }}</td>
                        <td>{{ $mat_in->jpl }}</td>
                        <td>{{ $mat_in->module->sum('jpl') }}</td>
                    </tr>
                    @foreach($mat_in->module as $module)
                        <tr>
                            <td></td>
                            <td colspan="2">{{ $module->title }}</td>
                            <td>{{ $module->jpl }}</td>
                        </tr>
                    @endforeach

                @endforeach
                <tr>
                    <td>C</td>
                    <td colspan="3"><b>Materi Penunjang</b></td>
                </tr>
                @foreach($materi_penunjang as $mat_pen)
                    <tr>
                        <td class="text-right">{{ $loop->iteration }}</td>
                        <td>{{ $mat_pen->title }}</td>
                        <td>{{ $mat_pen->jpl }}</td>
                        <td>{{ $mat_pen->module->sum('jpl') }}</td>
                    </tr>
                    @foreach($mat_pen->module as $module)
                        <tr>
                            <td></td>
                            <td colspan="2">{{ $module->title }}</td>
                            <td>{{ $module->jpl }}</td>
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
            </table>

        </div>
    </div>


@endsection

