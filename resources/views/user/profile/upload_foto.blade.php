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
                <div class="col-md-8 offset-md-2 section">
                    <h1>Upload Passfoto</h1>
                    <form action="{{ route('crop.image.upload.store') }}" method="POST">
                        @csrf
                        <input type="file" name="image" class="image">
                        <input type="hidden" name="image_base64">
                        <img class="show-image image mt-2 w-100">
                        <br/>
                        <a href="" class="btn btn-secondary mt-3">Cancel</a>
                        <button class="btn btn-primary mt-3">Save</button>
                    </form>
                </div>
            </div>



        </div>
    </div>

@endsection

