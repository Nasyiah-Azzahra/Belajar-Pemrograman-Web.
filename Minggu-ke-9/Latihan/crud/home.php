<?php 


if (!isset($_SESSION["login"]))
{
    header("location: login.php");
    exit;
}
?>
<h1>Welcome to PDO CRUD!</h1>