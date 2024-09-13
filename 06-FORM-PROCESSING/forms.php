<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing</title>
</head>
<body>
    <h1>Processing Forms</h1>
    
    <form action="handle_reg.php" method="post">
        <p>Name:  <input type="text" name="name"> </p>
        <p>Email Address: <input type="email" name="email"></p>
        <p>Password: <input type="password" name="password" size="20"></p>
        <p>Year You Were Born: <input type="date" name="year" size="5"></p>

        <input type="submit" name="submit" value="register">
    </form>
</body>
</html>