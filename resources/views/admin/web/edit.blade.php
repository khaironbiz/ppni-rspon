@extends('layout.admin')
@section('content')
    @if(session('success'))
        <div class="alert alert-success ml-2">
            {{ session('success') }}
        </div>
    @elseif(session('danger'))
        <div class="alert alert-danger ml-2">
            {{ session('danger') }}
        </div>
    @endif
    <div class="card ml-2">
        <div class="card-header bg-info">
            @include('admin.menu.master')
        </div>
        <form method="post" action="{{ route('admin.web.update', ['id'=>$web->id]) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-2">
                                <b>Nama Web</b>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="nama_web" value="{{ $web->nama_web }}">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-2">
                                <b>Singkatan</b>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="singkatan" value="{{ $web->singkatan }}">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-2">
                                <b>Url</b>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="url" value="{{ $web->url }}">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-2">
                                <b>Email</b>
                            </div>
                            <div class="col-md-10">
                                <input type="email" class="form-control" name="email" value="{{ $web->email }}">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-2">
                                <b>Phone</b>
                            </div>
                            <div class="col-md-10">
                                <input type="number" class="form-control" name="phone" value="{{ $web->phone }}">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-2">
                                <b>Logo</b>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control" name="logo" required>
                                    <option value="">---pilih---</option>
                                    @foreach($files as $list)
                                        <option value="{{ $list->id}}" @if($list->url == $web->logo) {{ "selected" }} @endif>{{ $list->title  }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-2">
                                <b>PIC</b>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control" name="user_id" required>
                                    <option value="">---pilih---</option>
                                    @foreach($users as $list)
                                        <option value="{{ $list->id}}" @if($list->id == $web->pic->id) {{ "selected" }} @endif>{{ $list->nama_depan  }} {{ $list->nama_belakang  }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-2">
                                <b>Alamat</b>
                            </div>
                            <div class="col-md-10">
                                <textarea class="form-control">{{ $web->alamat }}</textarea>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-md-2">
                                <b>Visi</b>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="visi" value="{{ $web->visi }}">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-2">
                                <b>Misi</b>
                            </div>
                            <div class="col-md-10">
                                <textarea id="misi" class="form-control" name="misi">{{ $web->misi }}</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <img src="{{ $web->logo }}" class="img-thumbnail img-fluid w-10 rounded">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.web.show', ['id'=>$web->id]) }}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>


    </div>
    <script>
        tinymce.init({
            selector: '#misi',
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

