@extends('layout.landing')
@section('content')
    <section class="news section">
        <div class="container">
            <div class="row">
                <div class="col-col-md-12 mx-auto">
                    <div class="block">
                        <!-- Article -->
                        <article class="blog-post single">
                            <div class="post-thumb">
                                <?= $class_event->canva_url?>
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h3>{{ $class_event->title }}</h3>
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
                                    <?= $class_event->description?>

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


