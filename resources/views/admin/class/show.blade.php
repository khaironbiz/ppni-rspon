@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <b>{{ $title }}</b>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-2"><b>Title</b></div>
                <div class="col-md-10">{{ $class_event->title }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2"><b>Date</b></div>
                <div class="col-md-10">{{ $class_event->date_start }} sd {{ $class_event->date_finish }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2"><b>Description</b></div>
                <div class="col-md-10"><?= $class_event->description ?></div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2"><b>Canva</b></div>
                <div class="col-md-10"><?= $class_event->canva_url ?></div>
            </div>

        </div>
        <div class="card-footer">
            <a href="{{ route('admin.class.edit', ['slug'=>$class_event->slug]) }}" class="btn btn-success">Edit</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
                Delete
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-black">
                            <h5 class="modal-title" id="staticBackdropLabel">Delete Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('admin.class.delete') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <input type="checkbox" required value="{{ $class_event->slug }}" name="class_slug"> Saya Setuju menghapus data ini
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

