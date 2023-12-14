
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
                        @if($task->task_answer()->count() < 1)
                        <div class="row">

                            @foreach($question as $data)
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header bg-gray">
                                            <a href="{{ route('landing.task.show_soal', ['id'=>$data->id, 'enroll_id'=>$training_enroll->id]) }}" class="btn btn-white-md"><b>{{ $data->curriculum->title }}</b></a>

                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
