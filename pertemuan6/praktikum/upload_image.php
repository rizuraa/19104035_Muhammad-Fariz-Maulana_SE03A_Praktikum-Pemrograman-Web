<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <!-- type form input -->
    <form action="upload_process.php" method="post" enctype="multipart/form-data">
        
        pilih gambar : 
        <!-- input type gambar -->
        <input type="file" name="gambar_contoh" id="gambar_contoh">
        <br>
        <input type="submit" name="submit">

    </form>
</body>
</html>