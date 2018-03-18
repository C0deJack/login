<?php

session_start ();
$_SESSION ['Logged-In'] = 0;
$user = $_POST ['user-name'];
$password = $_POST ['password'];
$session = $_SESSION ['Logged-In'];

if ($user === 'John' && $password === '1234')
    {$_SESSION ['logged-in'] = 1;
    echo "Welcome back John! <br> <br>How are you today?";
    } else {$_SESSION ['logged-in'] = 2;
    header("Location: index.php");
}

?>
<h3>WELCOME TO ACCOUNTS</h3>

<form method="post" action="logout.php">
    <input type="hidden" name="logout">
    <input type="submit" value="logout">
</form>



