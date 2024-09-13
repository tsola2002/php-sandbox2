<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <h1>Deleting a Cookie</h1>

    <?php

    setcookie("username", "", time() - 1);


    echo "Hello " . $_COOKIE["username"];



    ?>
</body>

</html>