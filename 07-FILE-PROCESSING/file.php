<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working With Files</title>
</head>
<body>
    <h1>Working with files in PHP</h1>

    <?php 

        //  1. this code creates a new file document
        // if (touch("words.txt")) {
        //     echo "A file was created";
        // } 
        // else {
        //     echo "there was an error creating the file";
        // }

        // Deleting a file
        // if(unlink("words.txt")){
        //     echo "Success: File Has been deleted";
        // } else {
        //     echo "Failure: File has not been deleted";
        // }

        // 1b doing the same thing using fopen
        // $data = "Adding new data to a file \n";    
        // $handler = fopen("file-3.txt","a");

        // writes information to the file
        // fwrite($handler, $data);
        // fwrite($handler,"Another line of text \n");
        // closes the file stream
        // fclose($handler);

        // 2. this code creates and adds information to a file
        //$data = "sample information for our new file \n";
        // file_put_contents("file-2.txt", $data);
        // file_put_contents("file-2.txt", "we are adding a second line \n", FILE_APPEND);
        // outputs the size of the file in bytes
        // echo file_put_contents("file-2.txt", "we are adding a third line \r\n", FILE_APPEND);

        // 3. how to read data from a file using fopen
        // $handler = fopen("file-2.txt","r");
        // $content = fread($handler, filesize("file-2.txt"));
        // fclose($handler);
        // //display contents of the file
        // echo $content;



        // 6. creating a folder
        //mkdir("new-folder");

        // 7. Deleting a folder
        // rmdir("new-folder");

        // 8. Making a copy of a file
        // echo "file-2.txt has been copied: " . copy("file-2.txt", "new-file-3.txt") . "<br>";

        // 9. renaming a file
        // rename("new-file-3.txt","new-file-4.txt");

        // 10. changing file permissions
        $resource = "file.php";
        chmod($resource, 0777);

        

        // 11. viewing read and write permissions of a file
        
        echo "is readable" . is_readable($resource) . "<br>";
        echo "is writeable" . is_writable($resource) . "<br>";
        echo "is executable" . is_executable($resource) . "<br>";

        // Viewing file details
        echo "filesize is: " . filesize($resource) ." bytes <br>";
        echo "last modified date/time: " . strftime('%m/%d/%Y %H:%M', filemtime($resource)) ."<br>";

        echo "last changed date/time: " . strftime('%m/%d/%Y %H:%M', filectime($resource)) ."<br>";

        echo "last accessed date/time: " . strftime('%m/%d/%Y %H:%M', fileatime($resource)) ."<br>";

    $pathTofile = pathinfo(__FILE__);
    echo "path to directory: ". $pathTofile['dirname'] . "<br>";

    echo "full file name: ". $pathTofile['basename'] . "<br>";

    echo "extension name: ". $pathTofile['extension'] . "<br>";
    ?>
</body>
</html>