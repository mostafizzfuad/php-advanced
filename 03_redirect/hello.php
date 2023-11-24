<?php

$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];

echo $user;
echo "<br>";
echo $pass;

echo "<hr>";

if ($user == 'fuad') {
    header("location: show.php?test=$user");
    // header("location: show.php?test={$_REQUEST['username']}");
} elseif ($user == 'google') {
    header('location: https://www.google.com');
} elseif ($user == 'facebook') {
    header('location: https://www.facebook.com');
} else {
    echo "not redirect !!";
}


// The header() function in PHP : sends a raw HTTP header to a client or browser.