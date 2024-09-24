@extends('layout.admin')
@section('content')
    <div class="card ml-2 ">
        <div class="card-header bg-info">
            @include('admin.menu.training')
        </div>
        <div class="card-header bg-dark">
            <b>{{ $title }}</b>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Title</b>
                </div>
                <div class="col-md-10">
                    {{ $event->title }}
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Date</b>
                </div>
                <div class="col-md-10">
                    {{ $event->date_start }} SD {{ $event->date_finish }}
                </div>

            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Description</b>
                </div>
                <div class="col-md-10">
                    @php
                    echo $event->description
                    @endphp
                </div>

            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <b>Canva</b>
                </div>
                <div class="col-md-10">
                    @php
                        echo $event->canva_event
                    @endphp
                </div>

            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.event.edit', ['slug'=>$event->slug]) }}" class="btn btn-success">Edit</a>
            <!-- Button trigger modal -->
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
                        <form action="{{ route('admin.event.destroy') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <input type="checkbox" required value="{{ $event->slug }}" name="event_slug"> Saya Setuju menghapus data ini
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
    <div class="card ml-2">
        <div class="card-header bg-dark">
            <label>Kelas</label>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Event</th>
                    <th>Class</th>
                    <th>Date</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($event_classes as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->date_start }} sd {{ $data->date_finish }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>

@endsection

