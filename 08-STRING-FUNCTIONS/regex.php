<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular expressions</title>
</head>
<body>
    <h1>Regular Expressions</h1>
    <?php
    $subject = "My  is shola. shola is my right";

    $numbers = "124456789";
    $d = "d";
    $word = "shape";
    $email = "tsola2002@yahoo.co.uk";

    if(preg_match("/[abcd]/", $d)){
        echo "the character exists" . "<br>";
    } else {
        echo "Failure: character doesn't exist" . "<br>";
    }

    if(preg_match("/Shape/i", $word)){
        echo "word is an react match" . "<br>";
    } else {
        echo "Failure: words do not match" . "<br>";
    }

    if(preg_match("/name | right| wrong/i", $subject)){
        echo "one field was found" . "<br>";
    } else {
        echo "no fields were found" . "<br>";
    }

    if(preg_match("/4{3}/", $numbers)){
        echo "Success: Occurence is a match" . "<br>";
    } else {
        echo "Failure: there is no match". "<br>";
    }

    $new_string = "John";
    $replaced = preg_replace("/shola/", $new_string, $subject);

    echo $replaced . "<br>";


    

    ?>
</body>
</html>