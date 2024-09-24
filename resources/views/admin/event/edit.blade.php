@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header bg-info">
            @include('admin.menu.training')
        </div>
        <div class="card-header">
            <b>Create New Event</b>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.event.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="event_id" value="{{ $event->id }}">
                        <input type="text" class="form-control" name="title" value="{{ $event->title }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="date_start" value="{{ old('date_start', $event->date_start) }}">
                    </div>
                    <div class="col-sm-2 text-center">
                        <b>SD</b>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="date_finish" value="{{ old('date_finish', $event->date_finish) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Canva</label>
                    <div class="col-sm-10">
                        <textarea name="canva_event" class="form-control">{{ old('canva_event',$event->canva_event) }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Penjelasan</label>
                    <div class="col-sm-10">
                        <textarea id="my-editor" name="description"><?= old('description', $event->description) ?></textarea>
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

