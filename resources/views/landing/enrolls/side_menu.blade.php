<div class="col-lg-4 col-md-10 mx-auto">
    <div class="sidebar">
        <div class="widget category">
            <h5 class="widget-header">{{ $training_enroll->training->title }}</h5>
            <ul class="category-list m-0 p-0">
                <li><a href="{{ route('landing.task.pretest',['id'=>$training_enroll->id]) }}">Pre Test</a></li>
                <li><a href="{{ route('landing.task.posttest',['id'=>$training_enroll->id]) }}">Post Test</a></li>
                <li><a href="{{ route('curriculum.show',['id'=>$training_enroll->id]) }}">Module</a></li>
            </ul>
        </div>

    </div>
</div>
