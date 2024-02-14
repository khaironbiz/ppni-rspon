<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th>#</th>
        <th>Waktu</th>
        <th>Materi</th>
        <th>Pengajar</th>
        <th>JPL</th>
        @if(\Illuminate\Support\Facades\Auth::user()->role_code->title == 'Super Admin')
        <th>Aksi</th>
        @endif
    </tr>
    </thead>
    <tbody>
    @foreach($schedules as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->start }}</td>
            <td>{{ $data->module->title }}</td>
            <td>{{ $data->user->nama_depan }} {{ $data->user->nama_belakang }}</td>
            <td>{{ $data->module->jpl }}</td>
            @if(\Illuminate\Support\Facades\Auth::user()->role_code->title == 'Super Admin')
            <td>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Module{{$data->id}}">
                    Pengajar
                </button>
                <div class="modal fade" id="Module{{$data->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title" id="staticBackdropLabel">Update Jadwal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('admin.schedule.update') }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="row mb-1">
                                        <div class="col-md-3">
                                            <b>Kelas</b>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                            <select class="form-control" name="class_event_id">
                                                <option value="{{ $data->class->id }}">{{ $data->class->title }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-md-3">
                                            <b>Mata Ajar</b>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control" name="module_id">
                                                <option value="{{ $data->module->id }}">{{ $data->module->title }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-md-3">
                                            <b>Pengajar</b>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control" name="user_id">
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->nama_depan }} {{ $user->nama_belakang }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-md-3">
                                            <b>Mulai</b>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="datetime-local" class="form-control" name="start" value="{{ $data->start }}">
                                        </div>
                                        <div class="col-md-3">
                                            <b>Durasi (Menit)</b>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" class="form-control" name="durasi" value="{{ (strtotime($data->finish) - strtotime($data->start))/60 }}">
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </td>
            @endif
        </tr>
    @endforeach

    </tbody>
</table>
