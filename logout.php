<?php
session_start();
$_SESSION = [];
session_destroy();
?>

<h2>You have safely logged out</h2>

<a href="index.php">Click here to log back in</a>
