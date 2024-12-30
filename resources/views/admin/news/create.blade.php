@extends('layout.admin')
@section('content')
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
            <div class="row">
                <div class="col-md-3">
                    <label>Title</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control">
                </div>

            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <label>Author</label>
                </div>
                <div class="col-md-3">
                    <select class="form-control" name="author" required>
                        <option value="">--pilih--</option>
                        @foreach($authors as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_depan }} {{ $data->nama_belakang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Date Publish</label>
                </div>
                <div class="col-md-3">
                    <input type="date" name="date_publish" class="form-control">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <label>Isi Berita</label>
                </div>
                <div class="col-md-9">
                    <textarea id="my-editor" name="description"></textarea>
                </div>
            </div>
            <div>
                <div>

                </div>
                <div>
                    <select class="form-control" name="id_gambar">
                        <option></option>
                    </select>

                </div>
                <div>
                    <img id="image" src="" alt="Gambar" style="max-width: 100%; height: auto; display: none;">
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
                            if (response.image_url) {
                                // Set gambar di <img> tag
                                $('#image').attr('src', response.image_url).show();
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

