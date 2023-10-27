@extends('layout.landing')
@section('content')

    <section class="section speakers bg-speaker overlay-lighter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title -->
                    <div class="section-title white">
                        <h3>Pengurus <span class="alternate">DPK PPNI RSPON</span></h3>
                        <p>Pengurus Harian</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <!-- Speaker 2 -->
                    <div class="speaker-item">
                        <div class="image">
                            <img src="assets/theme/images/speakers/speaker-two.jpg" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <h5><a href="{{ route('landing.person.show') }}">Ir. Ns. Khairon, S.Kep, S.Kom</a></h5>
                            <p>Ketua</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <!-- Speaker 1 -->
                    <div class="speaker-item">
                        <div class="image">
                            <img src="{{ asset('assets/theme/images/speakers/speaker-one.jpg') }}" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <h5><a href="single-speaker.html">Ns. Dyah Kartika Putri, S.Kep</a></h5>
                            <p>Sekretaris</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <!-- Speaker 3 -->
                    <div class="speaker-item">
                        <div class="image">
                            <img src="{{ asset('assets/theme/images/speakers/speaker-three.jpg') }}" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <h5><a href="single-speaker.html">Ns. Mira Novianti, S.Kep</a></h5>
                            <p>Bendahara</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--================================
            =            Seksi-seksi     =
            =================================-->
            <div class="row">
                <div class="col-12">
                    <!-- Section Title -->
                    <div class="section-title white">
                        <h3>Seksi Organisasi</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <!-- Speaker 1 -->
                    <div class="speaker-item">
                        <div class="image">
                            <img src="{{ asset('assets/theme/images/speakers/speaker-one.jpg') }}" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <h5><a href="single-speaker.html">Johnathan Franco</a></h5>
                            <p>Ketua</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <!-- Speaker 1 -->
                    <div class="speaker-item">
                        <div class="image">
                            <img src="{{ asset('assets/theme/images/speakers/speaker-one.jpg') }}" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <h5><a href="single-speaker.html">Johnathan Franco</a></h5>
                            <p>Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <!-- Speaker 2 -->
                    <div class="speaker-item">
                        <div class="image">
                            <img src="{{ asset('assets/theme/images/speakers/speaker-two.jpg') }}" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <h5><a href="single-speaker.html">Johnathan Franco</a></h5>
                            <p>Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <!-- Speaker 3 -->
                    <div class="speaker-item">
                        <div class="image">
                            <img src="{{ asset('assets/theme/images/speakers/speaker-three.jpg') }}" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <h5><a href="single-speaker.html">Johnathan Franco</a></h5>
                            <p>Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <!-- Speaker 4 -->
                    <div class="speaker-item">
                        <div class="image">
                            <img src="{{ asset('assets/theme/images/speakers/speaker-four.jpg') }}" alt="speaker" class="img-fluid">
                            <div class="primary-overlay"></div>
                            <div class="socials">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content text-center">
                            <h5><a href="single-speaker.html">Johnathan Franco</a></h5>
                            <p>Project Manager</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--====  End of Seksi Organisasi  ====-->


        </div>
    </section>

@endsection
