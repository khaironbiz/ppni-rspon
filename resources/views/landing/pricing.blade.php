@extends('layout.landing')
@section('content')

    <section class="section pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Develope <span class="alternate">Your System</span></h3>
                        <p>Anda tidak perlu risau dengan software development, biar kami yang mengurus, anda fokus dalam pengembangan bisnisnya</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Item -->
                    <div class="pricing-item">
                        <div class="pricing-heading">
                            <!-- Title -->
                            <div class="title">
                                <h6>Landing Page</h6>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                <h2>500K<span>IDR</span></h2>
                                <p>/Halaman</p>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <!-- Feature List -->
                            <ul class="feature-list m-0 p-0">
                                <li><p><span class="fa fa-check-circle available"></span>Minimal 10 Halaman</p></li>
                                <li><p><span class="fa fa-check-circle available"></span>Geratis Hosting 1 Tahun</p></li>
                                <li><p><span class="fa fa-check-circle available"></span>Geratis Pemeliharaan 1 Tahun</p></li>
                                <li><p><span class="fa fa-check-circle available"></span>Geratis 2 kali Revisi</p></li>
                            </ul>
                        </div>
                        <div class="pricing-footer text-center">
                            <a href="{{ route('landing.booking') }}" class="btn btn-transparent-md">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Item -->
                    <div class="pricing-item featured">
                        <div class="pricing-heading">
                            <!-- Title -->
                            <div class="title">
                                <h6>Web Apps</h6>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                <h2>450K<span>IDR</span></h2>
                                <p>/Halaman</p>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <!-- Feature List -->
                            <ul class="feature-list m-0 p-0">
                                <li><p><span class="fa fa-check-circle available"></span>Minimal 15 Halaman</p></li>
                                <li><p><span class="fa fa-check-circle available"></span>Geratis Hosting 1 Tahun</p></li>
                                <li><p><span class="fa fa-check-circle available"></span>Geratis Pemeliharaan 1 Tahun</p></li>
                                <li><p><span class="fa fa-check-circle available"></span>Geratis 2 kali Revisi</p></li>
                            </ul>
                        </div>
                        <div class="pricing-footer text-center">
                            <a href="{{ route('landing.booking') }}" class="btn btn-main-md">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-auto">
                    <!-- Pricing Item -->
                    <div class="pricing-item">
                        <div class="pricing-heading">
                            <!-- Title -->
                            <div class="title">
                                <h6>Android APPS</h6>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                <h2>900K<span>IDR</span></h2>
                                <p>/Halaman</p>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <!-- Feature List -->
                            <ul class="feature-list m-0 p-0">
                                <li><p><span class="fa fa-check-circle available"></span>Minimal 5 Halaman</p></li>
                                <li><p><span class="fa fa-check-circle available"></span>Geratis Publish ke Playstore</p></li>
                                <li><p><span class="fa fa-check-circle available"></span>Geratis RESTFul API</p></li>
                                <li><p><span class="fa fa-check-circle available"></span>Geratis Hosting 1 Tahun</p></li>
                            </ul>
                        </div>
                        <div class="pricing-footer text-center">
                            <a href="{{ route('landing.booking') }}" class="btn btn-transparent-md">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
