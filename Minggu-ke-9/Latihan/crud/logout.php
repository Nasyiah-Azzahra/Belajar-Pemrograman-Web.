<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', time()-3600);
setcookie('key', '', time()-3600);
echo "<script>alert('Anda Berhasil Logout'); window.location='login.php';</script>";
exit;
?>