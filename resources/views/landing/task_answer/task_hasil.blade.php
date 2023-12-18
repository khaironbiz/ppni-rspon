
@extends('layout.landing')
@section('content')
    <section class="section schedule">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <h4>Hasil {{ $task->jenis_tugas_code->title }}</h4>
                    </div>

                    <div class="schedule-contents bg-schedule">
                        <div class="row">
                            <div class="col-md-4">
                                <b>Nama Kegiatan</b>
                            </div>
                            <div class="col-md-4">
                                <b>{{ $training_enroll->training->title }}</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <b>Jenis Tugas</b>
                            </div>
                            <div class="col-md-4">
                                <b>{{ $task->jenis_tugas_code->title }}</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <b>Waktu Mulai</b>
                            </div>
                            <div class="col-md-4">
                                <b>{{ $task_answer->date_start }}</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <b>Waktu Selesai</b>
                            </div>
                            <div class="col-md-4">
                                <b>{{ $task_answer->date_finish }}</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <b>Nilai</b>
                            </div>
                            <div class="col-md-4">
                                <b>{{ $task_answer->nilai }}</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <b>Detail</b>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="btn btn-sm btn-info">Detail</a>
                            </div>
                        </div>
                    </div>
                    @if($task_answer->status == "open")
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Kumpulkan Jawaban
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('landing.task.finish') }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <input type="text" value="{{ $training_enroll->id }}" name="enroll_id" class="form-control">
                                        <input type="text" value="{{ $task_answer->id }}" name="task_answer_id" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Finish</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                        @endif
                </div>
            </div>
        </div>
    </section>
@endsection
