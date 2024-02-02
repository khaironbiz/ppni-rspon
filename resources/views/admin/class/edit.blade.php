@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <b>Create New Class</b>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.class.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="class_slug" value="{{ $class_event->slug }}">
                        <input type="text" class="form-control" name="title" value="{{ $class_event->title }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Event</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="event_id">
                            <option value="{{ $class_event->event_id }}">{{ $class_event->event->title }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="date_start" value="{{ $class_event->date_start }}">
                    </div>
                    <div class="col-sm-2 text-center">
                        <b>SD</b>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="date_finish" value="{{ $class_event->date_finish }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Penjelasan</label>
                    <div class="col-sm-10">
                        <textarea id="my-editor" name="description"><?= $class_event->description?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="file">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Embed Canva</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="canva_url">{{ $class_event->canva_url }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('admin.class.index') }}" class="btn btn-danger">Cancel</a>
                    </div>

                </div>

            </form>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: '#my-editor',
            plugins: 'autolink lists link image charmap print preview',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | link image',
            height: 300,
        });
    </script>

@endsection

