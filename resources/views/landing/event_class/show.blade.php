@extends('layout.landing')
@section('content')
    <section class="news section">
        <div class="container">
            <div class="row">
                <div class="col-col-md-12 mx-auto">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @elseif(session('danger'))
                        <div class="alert alert-danger">
                            {{ session('danger') }}
                        </div>
                    @endif
                    <div class="block">
                        <!-- Article -->
                        <article class="blog-post single">
                            <div class="post-thumb">
                                @if($class_event->file != null)
                                    <img src="{{ $class_event->file }}" alt="post-image" class="img-fluid">
                                @else
                                        <?= $class_event->canva_url?>
                                @endif

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
                                    @if(empty($training_enroll))
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                            Daftar Disini
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-warning">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Enroll {{ $class_event->title }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('landing.training.enroll.store') }}" method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <input type="checkbox" name="id" value="{{ $class_event->id }}"> Saya setuju daftar pelatihan ini
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Daftar</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    @elseif($training_enroll->status == 'pending')
                                        <a href="" class="btn btn-info">Pending Order</a>
                                    @else
                                        <button class="btn btn-danger">Enrolled</button>
                                    @endif
                                </div>
                            </div>
                        </article>
                        <a href="{{ route('landing.class.index') }}" class="btn btn-main-md">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


