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
            @include('admin.menu.training')
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Date Publish</label>
                    <input type="date" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Author</label>
                    <select class="form-control" name="author" required>
                        <option value="">--pilih--</option>
                        @foreach($authors as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_depan }} {{ $data->nama_belakang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Poster</label>
                    <select class="form-control" name="id_gambar" id="image-id">
                        <option value="">--pilih gambar--</option>
                        @foreach($files as $gambar)
                            <option value="{{ $gambar->id }}">{{ $gambar->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <img id="image" src="" alt="Gambar akan ditampilkan di sini" style="max-width: 100%; display: none;">
            </div>
            <div class="form-group">
                <label>Isi Berita</label>
                <textarea id="my-editor" name="description"></textarea>
            </div>




            <div class="row mt-2">
                <div class="col-md-3">
                    <label>Isi Berita</label>
                </div>
                <div class="col-md-9">
                </div>
            </div>
        </div>
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

