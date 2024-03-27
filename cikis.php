<?php
session_start();
$_SESSION['giris_yapildimi'] = "hayir";
session_destroy();
$_SESSION['giris_yapildimi'] = "hayir";
header("Location: index.php");
exit;
?>
