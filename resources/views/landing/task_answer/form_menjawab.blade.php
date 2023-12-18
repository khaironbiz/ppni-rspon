
@extends('layout.landing')
@section('content')
    <section class="section schedule">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h4>Jawablah pertanyaan dibawah ini</h4>
                    </div>
                    <div class="schedule-contents bg-schedule">
                        <form action="{{ route('landing.task.answer.detail.store') }}" method="post">
                            <input type="hidden" value="{{ $task_answer_detail->id }}" name="task_answer_detail_id">
                            <input type="hidden" value="{{ $training_enroll->id }}" name="training_enroll_id">
                            <div class="row">
                                @csrf
                                @method('PUT')
                                    @if(!empty($task_answer_detail->youtube_id_video))
                                        <div class="col-md-6">
                                            <iframe class="w-100" height="315" src="https://www.youtube.com/embed/{{ $task_answer_detail->youtube_id_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                    @endif

                                    <div class="col-md-6">
                                        <b>{{ $task_answer_detail->question->title }}</b>
                                        <br>
                                        @foreach($answer as $list)
                                            <input type="radio" value="{{ $list->id }}" name="id_jawaban" required> {{ $list->title }} <br>
                                        @endforeach
                                    </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-danger">Back</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
