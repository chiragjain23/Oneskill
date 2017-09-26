<?php
include 'update.php';
mysql_close($con);
session_destroy();
header('location:results.html');
?>