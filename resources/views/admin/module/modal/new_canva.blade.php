<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addDataCanva">
    Canva
</button>
<!-- Modal -->
<div class="modal fade" id="addDataCanva" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Canva</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('admin.module_attachment.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label>Topik Pembelajaran</label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="module_id">
                                <option value="{{ $module->id }}">{{ $module->title }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label>Jenis File</label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="file_type" required>
                                <option value="canva">Canva</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label>Embed</label>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" name="file_name"></textarea>
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

