<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h3>Hello</h3>
<form action="" method="post" name="message">
    <input type="text" name="vardas" placeholder="name">
    <input type="text" name="pavarde" placeholder="lastname">
    <input type="text" name="message" placeholder="message">
    <button type="submit">Submit message</button>
</form>
<br>
<h3>Login</h3>
<form action="" method="post">
    <input type="text" name="pavarde" placeholder="email">
    <input type="text" name="pavarde" placeholder="password">
    <button type="submit">Login</button>
</form>
<br>

<?php
if (isset($_POST["message"])) {
    echo "Name; " . $_POST["vardas"] . "<br>";
    echo "Last Name: " . $_POST["pavarde"] . "<br>";
    echo "Message; " . $_POST["message"];
}
if  (isset($_POST['username']) && isset($_POST['password']))
    {
        if($_POST['username'] == 'dovydaszaicevas' && $_POST['password'] == 'dovi') {
            echo 'Prisijungei';
        } else {
            echo 'Blogas slaptazodis';
        }
    }
?>
</body>
</html>