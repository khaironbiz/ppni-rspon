$(document).ready(function() {
    // Ketika ID gambar dipilih
    $('#image-id').change(function() {
        var imageId = $(this).val();  // Ambil ID gambar yang dipilih

        // Cek jika ID gambar tidak kosong
        if (imageId) {
            $.ajax({
                url: '/image/' + imageId,  // URL route untuk mengambil gambar berdasarkan ID
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Jika gambar ditemukan
                    if (response.url) {
                        // Set gambar di <img> tag
                        $('#image').attr('src', response.url).show();
                    }
                },
                error: function() {
                    alert('Gambar tidak ditemukan.');
                }
            });
        } else {
            // Jika ID gambar kosong, sembunyikan gambar
            $('#image').hide();
        }
    });
});
