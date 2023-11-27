@extends('layout.admin')
@section('content')


    <form action="{{url('store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12 m-auto">
                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ Session::get('success') }}
                    </div>
                @elseif(Session::has('failed'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ Session::get('failed') }}
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title"> Create Post </h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label> Title </label>
                            <input type="text" class="form-control" name="title" placeholder="Enter the Title">
                        </div>
                        <div class="form-group">
                            <label> Body </label>
                            <textarea class="form-control" id="content" placeholder="Enter the Description" rows="10" name="body"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"> Save </button>
                        <a href="{{ url('/') }}" class="btn btn-danger"> Back </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        ClassicEditor.create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


@endsection


