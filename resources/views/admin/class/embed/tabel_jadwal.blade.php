<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th>#</th>
        <th>Waktu</th>
        <th>Materi</th>
        <th>Pengajar</th>
        <th>JPL</th>
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
        </tr>
    @endforeach

    </tbody>
</table>
