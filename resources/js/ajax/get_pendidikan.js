function pendidikan_id(jenis_pendidikan) {
    $.ajax({
        url: "{{ route('dropdown.pendidikan.child') }}",
        type: "GET",
        data: {
            jenis_pendidikan: jenis_pendidikan
        },
        success: function(response) {
            $("#pendidikan_id").empty();
            $("#pendidikan_id").append("<option value=''>---pilih---</option>");
            $.each(response, function(key, value) {
                $("#pendidikan_id").append("<option value='" + value.id + "'>" + value.title + "</option>");
            });
        }
    });
}
