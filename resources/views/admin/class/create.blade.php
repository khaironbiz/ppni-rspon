@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <b>Create New Class</b>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.class.store') }}" method="POST">
                @csrf
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                        <select class="form-control" name="training_id" id="training_id">
                            <option value="">---pilih pelatihan---</option>
                            @foreach($trainings as $data)
                                <option value="{{ $data->id }}">{{ $data->title }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kurikulum</label>

                    <div class="col-md-10">
                        <select class="form-control" name="curriculum_version_id" id="curriculum_version_id"></select>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('#training_id').change(function() {
                                var training_id = $(this).val();
                                $.ajax({
                                    url: '/master/kurikulum/versi/' + training_id,
                                    type: 'GET',
                                    dataType: 'json',
                                    success: function(data) {
                                        $('#curriculum_version_id').empty();
                                        $.each(data, function(key, value) {
                                            $('#curriculum_version_id').append('<option value="' + value.id + '">' + value.title + '</option>');
                                        });
                                    }
                                });
                            });
                        });
                    </script>
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
                    <label class="col-sm-2 col-form-label">TOC</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="toc">
                            <option>-----</option>
                            @foreach($users as $u)
                                <option value="{{ $u->id }}">{{ $u->nama_depan }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">MOT</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="mot">
                            <option>-----</option>
                            @foreach($users as $u)
                                <option value="{{ $u->id }}">{{ $u->nama_depan }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Poster</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="file">
                            <option>-----</option>
                            @foreach($file as $f)
                                <option value="{{ $f->url }}">{{ $f->title }}</option>
                            @endforeach
                        </select>
                        <small class="text-success">Pastikananda telah memiliki file gambar pada list dokument <a href="{{ route('user.file.index') }}" target="_blank">Klik disisni</a></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Embed Canva</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="canva_url">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Penjelasan</label>
                    <div class="col-sm-10">
                        <textarea id="my-editor" name="description"></textarea>
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

