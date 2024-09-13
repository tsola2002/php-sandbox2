<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>capturing query strings</title>
</head>
<body>
    <h1>Capturing Query Strings</h1>

    <?php
        $urlName = $_GET["id"];
        //echo $urlName;
    
        //print_r($urlName);
        //var_dump($urlName);

        echo $_GET["name"] . " " . $_GET["id"]
    ?>
</body>
</html>