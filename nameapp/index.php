<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form method="post">
        <h1>Enter your name</h1>
        <input type="text" name="name" placeholder="Your name">
        <br>
        <br>
        <input type="submit" name="register">

    </form>
    <?php
        include("register.php");
    ?>
</body>
</html>
