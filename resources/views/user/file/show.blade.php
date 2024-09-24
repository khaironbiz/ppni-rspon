@extends('layout.user')
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
            @include('user.menu.profile')
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-2">
                            <b>Pemilik File</b>
                        </div>
                        <div class="col-md-10">
                            {{ $file->user->nama_depan }} {{ $file->user->nama_belakang }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Nama File</b>
                        </div>
                        <div class="col-md-10">
                            {{ $file->title }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>File Type</b>
                        </div>
                        <div class="col-md-10">
                            {{ $file->file_type }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>File Name</b>
                        </div>
                        <div class="col-md-10">
                            {{ $file->file_name }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Extention</b>
                        </div>
                        <div class="col-md-10">
                            {{ $file->extention }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Size</b>
                        </div>
                        <div class="col-md-10">
                            {{ $file->size }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <b>Url</b>
                        </div>
                        <div class="col-md-10">
                            {{ $file->url }}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    @if($file->file_type == 'file')
                        <div id="scroller">
                            <iframe class="w-100" width="560" height="315" name="myiframe" id="myiframe"
                                    src="{{ $file->url }}" width=\"100%\" style=\"height:100%\"></iframe>
                        </div>
                    @elseif($file->file_type == 'Youtube')
                        <div>
                            <iframe class="w-100" width="560" height="315"
                                    src="https://www.youtube.com/embed/{{ $file->file_name }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>

                        </div>
                    @elseif($file->file_type == 'Canva')
                        <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%; padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;border-radius: 8px; will-change: transform;">
                            <iframe loading="lazy"
                                    style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                                    src="https://www.canva.com/design/{{ $file->file_name }}/view?embed"
                                    allowfullscreen="allowfullscreen" allow="fullscreen">
                            </iframe>
                        </div>
                    @endif

                </div>

            </div>


        </div>
        <div class="card-footer">
            <a href="{{ route('user.file.index') }}" class="btn btn-primary">Back</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteFile">
                Delete
            </button>

            <!-- Modal -->
            <div class="modal fade" id="deleteFile" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title" id="staticBackdropLabel">Delete File</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="{{ route('user.file.delete') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <input type="checkbox" name="file_id" value="{{ $file->id }}"> Saya Setuju menghapus
                                data ini
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
