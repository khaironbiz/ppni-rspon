@extends('layout.landing')
@section('content')

    <section class="news section">
        <div class="container">

            <div class="row justify-content-center mt-30">

                @foreach($enrolls as $data)
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="blog-post">
                            <div class="post-thumb">
                                <a href="">
                                    <img src="assets/theme/images/news/post-thumb-two.jpg" alt="post-image" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="date">
                                    <h4>{{ date('d', strtotime($data->class->date_start)) }}<span>{{ date('M', strtotime($data->class->date_start)) }}</span></h4>
                                </div>
                                <div class="post-title">
                                    <h2><a href="{{ route('landing.class.mine.show',['id'=>$data->id]) }}">{{ $data->class->title }}</a></h2>
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
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>




@endsection


