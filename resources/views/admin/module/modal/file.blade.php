<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDataFile">
    Upload File
</button>
<!-- Modal -->
<div class="modal fade" id="addDataFile" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="staticBackdropLabel">Upload File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('admin.module_attachment.uploadFile') }}" enctype="multipart/form-data">
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
                                <option value="file">File</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label>ID Video Youtube</label>
                        </div>
                        <div class="col-md-8">
                            <input type="file" class="form-control" name="file_name" required>
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

