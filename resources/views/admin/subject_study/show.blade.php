@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header bg-info">
            @include('admin.menu.training')
        </div>
        <div class="card-header">
            <b>{{ $title }}</b>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-2"><b>Title</b></div>
                <div class="col-md-10">{{ $subject_study->title }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2"><b>Kode Mata Ajar</b></div>
                <div class="col-md-10">{{ $subject_study->kode_mata_ajar }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2"><b>Description</b></div>
                <div class="col-md-10"><?= $subject_study->description ?></div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2"><b>Canva</b></div>
                <div class="col-md-4"><?= $subject_study->canva ?></div>
            </div>

        </div>

        <div class="card-footer">
            <a href="{{ route('admin.subjectStudy.edit', ['slug'=>$subject_study->slug]) }}" class="btn btn-success">Edit</a>
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
                        <form action="{{ route('admin.subjectStudy.delete') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <input type="checkbox" required value="{{ $subject_study->slug }}" name="slug"> Saya Setuju menghapus data ini
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
    <div class="card">
        <div class="card-header bg-dark">
            <b>Topic</b>
        </div>
        <div class="card-body">

            <table class="table table-sm table-striped mt-2">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Topic</th>
                    <th>Metode</th>
                    <th>Durasi</th>
                    <th>Pengajar</th>
                    <th>Waktu</th>

                </tr>
                </thead>
                <tbody>
                @foreach($topics as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->metode }}</td>
                        <td>{{ $data->jpl }} JPL</td>
                        <td>{{ $data->pengajar }}</td>
                        <td>{{ date('d-m-Y', strtotime($data->time_open)) }} {{ date('H:i', strtotime($data->time_open)) }} sd {{ date('H:i', strtotime($data->time_close)) }}</td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection

