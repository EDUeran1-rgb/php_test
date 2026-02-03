<!DOCTYPE html>
<?php 
    require_once("func.php");
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="admin_user.php" method="post">
        <input type="text" name="user" id="user" placeholder="Användarnamn" required>
        <input type="text" name="realname" id="realname" placeholder="Ditt namn" required>
        <input type="password" name="pass" id="pass" placeholder="Lösenord" required>
        <input type="submit" value="Skapa användare" name="btn">
</body>
</html>