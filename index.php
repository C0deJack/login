<?php
session_start ();
$session = $_SESSION ['logged-in'];

if ($session === 1) {
    header("Location: accounts.php");
} elseif ( $session === 2) {
    echo 'incorrect password or username';
}  else {
    echo 'Welcome! <br> <br> Please enter your user name and password below';
}
?>

<h3>LOGIN PAGE</h3>

<form method="post" action="accounts.php">
    <input type="text" name="user-name">
    <input type="text" name="password">
    <input type="submit">
</form>
