<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
    <?php 
        $upload_errors = array(
            UPLOAD_ERR_OK => "No Errors",
            UPLOAD_ERR_INI_SIZE => "Larger than upload max files",
            UPLOAD_ERR_FORM_SIZE => "Larger than form MAX_FILE_SIZE",
            UPLOAD_ERR_PARTIAL => "Partial Upload",
            UPLOAD_ERR_NO_FILE => "No File",
            UPLOAD_ERR_NO_TMP_DIR => "No temporary directory",
            UPLOAD_ERR_CANT_WRITE => "Can't write to disk",
            UPLOAD_ERR_EXTENSION => "File upload stopped by extension."
        );

        

        $error = $_FILES['file_upload']['error'];
        $message = $upload_errors[$error];


        // GRAB THE FILE UPLOAD
        echo "<pre>";
        print_r($_FILES['file_upload']);
        echo "</pre>";
        echo "<hr>";


    ?>

    <h1>Uploading Files in PHP</h1>

    <?php if (!empty($message)) {
        echo "<p>{$message}</p>";
    }?> 

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <input type="file" name="file_upload">
        <input type="submit" name="submit" value="Upload">
    </form>


</body>
</html>