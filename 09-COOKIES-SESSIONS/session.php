<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Working With Sessions</h1>

    <?php
        $_SESSION['username'] = "Ledor";
    ?>
</body>
</html>