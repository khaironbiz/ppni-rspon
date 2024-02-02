@extends('layout.landing')
@section('content')

    <section class="news section">
        <div class="container">
            <div class="row justify-content-center mt-30">
                @if($class_events->count()<1)
                    <a href="{{ route('landing.class.index') }}" class="btn btn-primary">Enroll Here</a>
                @endif
                @foreach($class_events as $data)
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="blog-post">
                            <div class="post-thumb">
                                <a href="{{  route('landing.class.show', ['slug'=>$data->slug]) }}">
                                    @if($data->file != null)
                                        <img src="{{ $data->file }}" alt="post-image" class="img-fluid">
                                    @else
                                        <img src="assets/theme/images/news/post-thumb-two.jpg" alt="post-image" class="img-fluid">
                                    @endif


                                </a>
                            </div>
                            <div class="post-content">
                                <div class="date">
                                    <h4>{{ date('d', strtotime($data->date_start)) }}<span>{{ date('M', strtotime($data->date_start)) }}</span></h4>
                                </div>
                                <div class="post-title">
                                    <h2><a href="{{  route('landing.class.show', ['slug'=>$data->slug]) }}">{{ $data->title }}</a></h2>
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

                @if($class_events->count() >=10)

                <div class="col-12 text-center">
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="prev">
                                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                    <span class="sr-only">prev</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                    @endif


            </div>
        </div>
    </section>




@endsection


