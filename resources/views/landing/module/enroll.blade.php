
@extends('layout.landing')
@section('content')
    <section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h5>Pilih Pelatihan yang anda maksud.</h5>
                    <h6><span class="alternate">Selamat Belajar</span> </h6>
                </div>
                <div class="schedule-contents bg-schedule">
                    <div class="row">
                        @foreach($enroll as $data)
                            <div class="col-md-4"><?= $data->class->canva_url ?>
                                <a href="{{ route('curriculum.show',['id'=>$data->id]) }}">
                                    <div class="card">
                                        <div class="card-header">
                                            <b>{{ $data->training->title }}</b>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
