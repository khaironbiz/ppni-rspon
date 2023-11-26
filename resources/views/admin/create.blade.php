
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.tiny.cloud/1/w1uizkwg0iz2di1di5deh3welq64lh13f5zh8nbnx4zi2t84/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Rich Text Editor</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">
                @csrf
                <textarea id="my-editor" name="content"></textarea>
                <br>
                <textarea id="penjelasan" name="content2"></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>

    </div>

</div>


<script>
    tinymce.init({
        selector: '#my-editor',
        plugins: 'autolink lists link image charmap print preview',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | link image',
        height: 300,
    });
</script>
<script>
    tinymce.init({
        selector: '#penjelasan',
        plugins: 'autolink lists link image charmap print preview',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | link image',
        height: 300,
    });
</script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>

