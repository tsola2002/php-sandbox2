<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optimization</title>
</head>
<body>
    <h1>Compressing Files</h1>

    <?php
        $outfile = "movie.zip";

        // THIS CREATES A NEW INSTANCE OF BUILT-IN ZIPARCHIVE CLASS
        $zip = new ZipArchive();

        // creates the zip file using the output filename
        $zip->open($outfile, ZIPARCHIVE::CREATE);

        $zip->addFile("video1.txt");
        $zip->addFile("video2.txt");

        $zip->close();
    ?>

</body>
</html>