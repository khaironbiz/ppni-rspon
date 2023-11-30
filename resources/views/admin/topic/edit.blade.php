@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <b>Create New Class</b>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.topic.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Subject Study</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="subject_study_id">
                            <option value="{{ $topic->subject_study_id }}">{{ $topic->subjectStudy->title }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pengajar</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="pengajar">
                            <option value="{{ $topic->pengajar }}">{{ $topic->pengajar }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Topic Title</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="slug" value="{{ $topic->slug }}">
                        <input type="text" class="form-control" name="title" value="{{ $topic->title }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Durasi Pembelajaran</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="jpl" value="{{ $topic->jpl }}">
                    </div>

                    <label class="col-sm-2 col-form-label">Metode Pembelajaran</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="metode" required>
                            <option value="" @if($topic->metode==null){{ "selected" }}@endif>----------</option>
                            <option value="1" @if($topic->metode==1){{ "selected" }}@endif>Ceramah</option>
                            <option value="2" @if($topic->metode==2){{ "selected" }}@endif>Praktik Laboratorium</option>
                            <option value="3" @if($topic->metode==3){{ "selected" }}@endif>Praktik Lapangan</option>
                            <option value="4" @if($topic->metode==4){{ "selected" }}@endif>Penugasan</option>
                        </select>
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Waktu MUlai</label>
                    <div class="col-sm-4">
                        <input type="datetime-local" class="form-control" name="time_open" value="{{ $topic->time_open }}">
                    </div>

                    <label class="col-sm-2 col-form-label">Waktu Selesai</label>
                    <div class="col-sm-4">
                        <input type="datetime-local" class="form-control" name="time_close" value="{{ $topic->time_close }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Penjelasan</label>
                    <div class="col-sm-10">
                        <textarea id="my-editor" name="description">{{ $topic->description }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Embed Canva</label>
                    <div class="col-sm-10">
                        <textarea name="canva" class="form-control">{{ $topic->canva }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('admin.event.index') }}" class="btn btn-danger">Cancel</a>
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

