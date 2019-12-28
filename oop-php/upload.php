<?php

if (isset($_POST['submit'])) {

  // echo '<pre>';
  // print_r($_FILES['file_upload']);
  // echo '</pre>';

  $upload_errors = array(
    UPLOAD_ERR_OK  => "Thre is no error",
    UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive",
    UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE directive",
    UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded",
    UPLOAD_ERR_NO_FILE => "No file was uploaded",
    UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder",
    UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk",
    UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload"
  );

  $temp_name = $_FILES['file_upload']['tmp_name'];

  $file_name = $_FILES['file_upload']['name'];

  $path = "uploads/";

  if (move_uploaded_file($temp_name, $path.$file_name)) {

    $message = 'File Uploaded Successfully';

  } else {

    $error = $_FILES['file_upload']['error'];

    $message = $upload_errors[$error];

  }



}


?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>File Upload</title>

</head>

<body>
<h2>
  <?php
  if (!empty($upload_errors)) {
    echo $message;
  }
   ?>
</h2>
<hr>
<form action="upload.php" enctype="multipart/form-data" method="post">
  <input type="file" name="file_upload"><br>
  <input type="submit" name="submit">
</form>

</body>
</html>
