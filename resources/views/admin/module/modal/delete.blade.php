<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">
    Delete
</button>
<!-- Modal -->
<div class="modal fade" id="delete{{$data->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="staticBackdropLabel">Delete Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('admin.module_attachment.delete') }}">
                @csrf
                @method('DELETE')
                <div class="modal-body">

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <input type="checkbox" name="id" value="{{ $data->id }}" required> <b>Saya setuju menghapus data ini</b>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

