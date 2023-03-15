<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image File</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <!-- <style>
      body{
        background: linear-gradient(#ecbb3d,
                        #e5c05a,
                        rgb(230, 213, 147),
                        #f1e9c1);
                display:flex;
                justify-content:center;
                align-items:center;
                background-attachment: fixed;}
      </style> -->
</head>
<?php require_once ("model/Files.php")?>
<body>
<div class="container p-5">
 <form action="index.php" method="post" enctype="multipart/form-data" class="p-5 shadow d-flex flex-column justify-content-center">
    <h2 for="formFileLg" class="p-3 text-center">Upload Image from here:</h2>
    <input class="form-control form-control-lg" id="formFileLg" name="fileToUpload" type="file">
    <br>
    <input type="submit" value="Upload Image" name="submit" class="btn bg-body-secondary" style="width:10vw;margin:auto">
 </form>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"
  ></script>
</body>
</html>