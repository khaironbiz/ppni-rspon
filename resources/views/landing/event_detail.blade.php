@extends('layout.landing')
@section('content')



    <section class="news section">
        <div class="container">
            <div class="row mt-30">
                <div class="col-col-md-12 mx-auto">
                    <div class="block">
                        <!-- Article -->
                        <article class="blog-post single">
                            <div class="post-thumb">
                                <div style="position: relative; width: 100%; height: 0; padding-top: 75.0000%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
                                    <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                                            src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF0B7GsxoY&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                                    </iframe>
                                </div>

{{--                                <img src="{{ asset('assets/theme/images/news/single-post.jpg') }}" alt="post-image" class="img-fluid w-100">--}}
                            </div>
                            <div class="post-content">
                                <div class="date">
                                    <h4>20<span>May</span></h4>
                                </div>
                                <div class="post-title">
                                    <h3>Pelatihan NIHSS</h3>
                                </div>
                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <i class="fa fa-user-o"></i>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-heart-o"></i>
                                            <a href="#">350</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-comments-o"></i>
                                            <a href="#">30</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-details">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud.laboris nisi ut aliquip ex ea commodo conse
                                        quat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <p>
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    </p>
                                    <p>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam.
                                        quaerat voluptatem.
                                    </p>
                                    <h4>Pre Test</h4>
                                    <h4>Topik Pelatihan</h4>
                                    <ul>

                                        <li><a href="{{  route('landing.event.topik', ['id'=>"kesadaran"]) }}">1.a Tingkat Kesadaran</a></li>
                                        <li><a href="{{  route('landing.event.topik', ['id'=>"pertanyaan"]) }}">1.b Menjawab Pertanyaan</a></li>
                                        <li><a href="{{  route('landing.event.topik', ['id'=>"perintah"]) }}">1.c Mengikuti Pertintah</a></li>
                                        <li><a href="{{  route('landing.event.topik', ['id'=>"Konjugat"]) }}">2 Gerakan Mata Konjugat Horizontal</a></li>
                                        <li><a href="{{  route('landing.event.topik', ['id'=>"LapangPandang"]) }}">3 Lapang Pandang</a></li>
                                        <li><a href="{{  route('landing.event.topik', ['id'=>"ParesisWajah"]) }}">4 Paresis Wajah</a></li>
                                        <li><a href="{{  route('landing.event.topik', ['id'=>"MotorikLengan"]) }}">5 Motorik Lengan</a></li>
                                        <li><a href="{{  route('landing.event.topik', ['id'=>"MotorikTungkai"]) }}">6 Motorik Tungkai</a></li>
                                        <li><a href="{{  route('landing.event.topik', ['id'=>"Ataksia"]) }}">7 Ataksia</a></li>
                                        <li><a href="{{  route('landing.event.topik', ['id'=>"Sensorik"]) }}">8 Sensorik</a></li>
                                        <li><a href="{{  route('landing.event.topik', ['id'=>"BahasaTerbaik"]) }}">9 Bahasa Terbaik</a></li>
                                        <li><a href="{{  route('landing.event.topik', ['id'=>"Disatria"]) }}">10 Disatria</a></li>
                                        <li><a href="{{  route('landing.event.topik', ['id'=>"Neglek"]) }}">11 Neglek / In Atensi</a></li>
                                    </ul>
                                    <h4>Post Test</h4>
                                    <div class="share-block">
                                        <div class="tag">
                                            <p>
                                                Tags:
                                            </p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">Event,</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Conference,</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Business</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="share">
                                            <p>
                                                Share:
                                            </p>
                                            <ul class="social-links-share list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection


