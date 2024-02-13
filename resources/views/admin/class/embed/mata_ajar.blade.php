<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th>#</th>
        <th>Materi</th>
        <th>Pengajar</th>
        <th>JPL</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>A</td>
        <td colspan="3"><b>Materi Dasar</b></td>
    </tr>
    @foreach($materi_dasar as $mat_das)
        <tr>
            <td class="text-right">{{ $loop->iteration }}</td>
            <td>
                {{ $mat_das->title }}
            </td>
            <td></td>
            <td>{{ $mat_das->module->sum('jpl') }}</td>
        </tr>
        @foreach($mat_das->module as $module)
            <tr>
                <td></td>
                <td>
                    {{ $module->title }}
                </td>
                <td>
                    @if($module->schedule()->where('class_event_id', $class_event->id)->count()< 1)
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Module{{$module->id}}">
                            Pengajar
                        </button>
                        <div class="modal fade" id="Module{{$module->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Pembicara</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.schedule.store') }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row mb-1">
                                                <div class="col-md-3">
                                                    <b>Kelas</b>
                                                </div>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="class_event_id">
                                                        <option value="{{ $class_event->id }}">{{ $class_event->title }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-md-3">
                                                    <b>Mata Ajar</b>
                                                </div>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="module_id">
                                                        <option value="{{ $module->id }}">{{ $module->title }}</option>
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
                                                    <input type="datetime-local" class="form-control" name="start">
                                                </div>
                                                <div class="col-md-3">
                                                    <b>Durasi (Menit)</b>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" class="form-control" name="durasi">
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
                    @endif

                </td>
                <td>{{ $module->jpl }}</td>
            </tr>
        @endforeach
    @endforeach
    <tr>
        <td>B</td>
        <td colspan="3"><b>Materi Inti</b></td>
    </tr>
    @foreach($materi_inti as $mat_in)
        <tr>
            <td class="text-right">{{ $loop->iteration }}</td>
            <td>{{ $mat_in->title }}</td>
            <td></td>
            <td>{{ $mat_in->module->sum('jpl') }}</td>
        </tr>
        @foreach($mat_in->module as $module)
            <tr>
                <td></td>
                <td>{{ $module->title }}</td>
                <td>
                    @if($module->schedule()->where('class_event_id', $class_event->id)->count()< 1)
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Module{{$module->id}}">
                            Pengajar
                        </button>
                        <div class="modal fade" id="Module{{$module->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Pembicara</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.schedule.store') }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row mb-1">
                                                <div class="col-md-3">
                                                    <b>Kelas</b>
                                                </div>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="class_event_id">
                                                        <option value="{{ $class_event->id }}">{{ $class_event->title }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-md-3">
                                                    <b>Mata Ajar</b>
                                                </div>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="module_id">
                                                        <option value="{{ $module->id }}">{{ $module->title }}</option>
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
                                                    <input type="datetime-local" class="form-control" name="start">
                                                </div>
                                                <div class="col-md-3">
                                                    <b>Durasi (Menit)</b>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" class="form-control" name="durasi">
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
                    @endif
                </td>
                <td>{{ $module->jpl }}</td>
            </tr>
        @endforeach

    @endforeach
    <tr>
        <td>C</td>
        <td colspan="3"><b>Materi Penunjang</b></td>
    </tr>
    @foreach($materi_penunjang as $mat_pen)
        <tr>
            <td class="text-right">{{ $loop->iteration }}</td>
            <td>{{ $mat_pen->title }}</td>
            <td></td>
            <td>{{ $mat_pen->module->sum('jpl') }}</td>
        </tr>
        @foreach($mat_pen->module as $module)
            <tr>
                <td></td>
                <td>{{ $module->title }}</td>
                <td>
                    @if($module->schedule()->where('class_event_id', $class_event->id)->count()< 1)
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Module{{$module->id}}">
                            Pengajar
                        </button>
                        <div class="modal fade" id="Module{{$module->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Pembicara</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.schedule.store') }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row mb-1">
                                                <div class="col-md-3">
                                                    <b>Kelas</b>
                                                </div>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="class_event_id">
                                                        <option value="{{ $class_event->id }}">{{ $class_event->title }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-md-3">
                                                    <b>Mata Ajar</b>
                                                </div>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="module_id">
                                                        <option value="{{ $module->id }}">{{ $module->title }}</option>
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
                                                    <input type="datetime-local" class="form-control" name="start">
                                                </div>
                                                <div class="col-md-3">
                                                    <b>Durasi (Menit)</b>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" class="form-control" name="durasi">
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

                    @endif
                </td>
                <td>{{ $module->jpl }}</td>
            </tr>
        @endforeach
    @endforeach
    </tbody>
</table>
