@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <b>Create New Class</b>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.class.store') }}" method="POST">
                @csrf

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Event</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="event_id">
                            @foreach($events as $data)
                                <option value="{{ $data->id }}">{{ $data->title }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Training</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="training_id">
                            <option value="">---pilih pelatihan---</option>
                            @foreach($trainings as $data)
                                <option value="{{ $data->id }}">{{ $data->title }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="date_start">
                    </div>
                    <div class="col-sm-2 text-center">
                        <b>SD</b>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="date_finish">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Penjelasan</label>
                    <div class="col-sm-10">
                        <textarea id="my-editor" name="description"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Embed Canva</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="canva_url">
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

