<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

<?php
session_start(); // dv bao ve
if($_SESSION['islogin']){
    header("Location: login.php");
}

?>
<h1>Home of Dashboard</h1>
<a href="login.php">Logout</a>

<h1>hello world</h1>



</body>
</html>