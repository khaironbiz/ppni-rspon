
@extends('layout.landing')
@section('content')
    <section class="section schedule">
        <div class="container-fluid">
            <div class="row">
                @include('landing.enrolls.side_menu')
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="section-title">
                        <h4>{{ $task->description }}</h4>
                        <h5><span class="alternate">Selamat Mengerjakan</span> </h5>
                        <h4>{{ $task->jenis_tugas_code->title }}</h4>
                    </div>

                    <div class="schedule-contents bg-schedule">
                        <div class="row">

                            @foreach($question as $data)
                                <div class="col-md-6">
                                    <div class="card mt-2">
                                        <div class="card-header @if($data->id_jawaban !=null) {{ "bg-success" }} @else {{ "bg-gray" }} @endif ">
                                            @if($data->id_jawaban !=null)
                                                <button class="btn btn-success"><b>{{ $data->curriculum->title }}</b></button>
                                            @else
                                                <a href="{{ route('landing.task.show_soal', ['id'=>$data->id, 'enroll_id'=>$training_enroll->id]) }}" class="btn btn-white-md"><b>{{ $data->curriculum->title }}</b></a>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            @endforeach
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
                                        <input type="checkbox" required> Saya Setuju mengumpulkan jawaban ini
                                        <input type="hidden" value="{{ $training_enroll->id }}" name="enroll_id" class="form-control">
                                        <input type="hidden" value="{{ $task_answer->id }}" name="task_answer_id" class="form-control">
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
