
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

                </div>
            </div>
        </div>
    </section>
@endsection
