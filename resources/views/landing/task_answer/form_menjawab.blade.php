
@extends('layout.landing')
@section('content')
    <section class="section schedule">
        <div class="container-fluid">
            <div class="row">
                @include('landing.enrolls.side_menu')
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="section-title">
                        <h4>Jawablah pertanyaan dibawah ini</h4>
                    </div>
                    <div class="schedule-contents bg-schedule">
                        <form action="" method="">
                            <div class="row">
                                    @csrf
                                    @if(!empty($question->youtube_id_video))
                                        <div class="col-md-6">
                                            <iframe class="w-100" height="315" src="https://www.youtube.com/embed/{{ $question->youtube_id_video }}?si=rMWbKB9H6wajujSs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                    @endif

                                    <div class="col-md-6">
                                        <b>{{ $question->title }}</b>
                                        <br>
                                        @foreach($question->answer()->get() as $list)
                                            <input type="radio" value="{{ $list->id }}" name="id_jawaban"> {{ $list->title }} <br>
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
