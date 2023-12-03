
@extends('layout.landing')
@section('content')
    <section class="section schedule">
    <div class="container">

        <div class="row">
            <div class="col-12">

                <div class="schedule-contents bg-schedule">
                    <?= $curriculum->canva ?>
                </div>
                <div class="download-button text-center">
                    <a href="{{ route('curriculum.versi',['slug'=>$curriculum->curriculum_version->slug]) }}" class="btn btn-main-md">Back</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
