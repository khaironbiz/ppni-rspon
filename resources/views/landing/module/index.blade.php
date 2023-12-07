
@extends('layout.landing')
@section('content')
    <section class="section schedule">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h4>Pada Bagian E-Modul Ini berisi materi pembelajaran terkait 11 Elemen dari NIHSS.
                        Anda Dapat memilih Fitur Elemen yang ingin Anda pelajari.</h4>
                    <h5><span class="alternate">Selamat Belajar</span> </h5>
                </div>

                <div class="schedule-contents bg-schedule">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active schedule-item" id="nov20">
                            <!-- Headings -->
                            <ul class="m-0 p-0">
                                <li class="headings">
                                    <div class="w-75"><b>{{ $version->training->title }}</b></div>
                                    <div class="venue"></div>
                                </li>
                                <!-- Schedule Details -->
                                @foreach($curriculums as $data)
                                    <li class="schedule-details">
                                        <div class="block">
                                            <!-- time -->
                                            <div class="w-75">
                                                <a href="{{ route('curriculum.canva',['slug'=>$data->slug]) }}" class="text-black"><b>{{ $loop->iteration }} . {{ $data->title }}</b></a>
                                            </div>

                                            <div class="venue"></div>
                                        </div>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
