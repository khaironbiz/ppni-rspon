@extends('layout.admin')
@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif
    <div class="card ml-2">
        <div class="card-header bg-info">
            @include('admin.menu.news')
        </div>
        <form action="{{ route('admin.news.update', ['id'=>$news->id]) }}" method="post">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $news->title }}">
                </div>
                <div class="form-group">
                    <label>Isi Berita</label>
                    <textarea id="my-editor" name="isi">{{ $news->isi }}</textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Date Publish</label>
                        <input type="date" class="form-control" name="publish" value="{{ $news->publish }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Author</label>
                        <select class="form-control" name="author" required>
                            <option value="">--pilih--</option>
                            @foreach($authors as $data)
                                <option value="{{ $data->id }}" @if($data->id == $news->author) {{ "selected" }} @endif>{{ $data->nama_depan }} {{ $data->nama_belakang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Category</label>
                        <select class="form-control" name="news_category">
                            <option value="">--pilih category--</option>
                            @foreach($news_categories as $data)
                                <option value="{{ $data->id }}" @if($data->id === $news->news_category) {{ "selected" }} @endif>{{ $data->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Poster</label>
                        <select class="form-control" name="poster" id="image-id">
                            <option value="">--pilih gambar--</option>
                            @foreach($files as $gambar)
                                <option value="{{ $gambar->id }}" @if($gambar->url === $news->poster) {{ "selected" }}@endif>{{ $gambar->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Poster Lama</label><br>
                        <img src="{{ $news->poster }}"  class="image w-50">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Poster Baru</label><br>
                        <img id="image" src="" alt="Gambar akan ditampilkan di sini" class="w-50" style="display: none;">
                    </div>



                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.news.edit', ['id'=>$news->id]) }}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
    <script>
        tinymce.init({
            selector: '#my-editor',
            plugins: 'autolink lists link image charmap print preview',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | link image',
            height: 500,
        });
    </script>
    <script>
        $(document).ready(function() {
            // Ketika ID gambar dipilih
            $('#image-id').change(function() {
                var imageId = $(this).val();  // Ambil ID gambar yang dipilih

                // Cek jika ID gambar tidak kosong
                if (imageId) {
                    $.ajax({
                        url: '/image/' + imageId,  // URL route untuk mengambil gambar berdasarkan ID
                        type: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            // Jika gambar ditemukan
                            if (response.url) {
                                // Set gambar di <img> tag
                                $('#image').attr('src', response.url).show();
                            }
                        },
                        error: function() {
                            alert('Gambar tidak ditemukan.');
                        }
                    });
                } else {
                    // Jika ID gambar kosong, sembunyikan gambar
                    $('#image').hide();
                }
            });
        });
    </script>

@endsection

