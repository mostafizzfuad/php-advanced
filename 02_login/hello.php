<?php
echo "Database saved information : <br>";
$dbUser = "mostafizzfuad";
$dbPass = "1234";
echo $dbUser;
echo "<br>";
echo $dbPass;

echo "<hr>";

echo "User input information : <br>";
$inputUser = $_REQUEST['username'];
$inputPass = $_REQUEST['password'];

echo $inputUser;
echo "<br>";
echo $inputPass;

echo "<hr>";

echo "Login information : <br>";
if ($dbUser == $inputUser && $dbPass == $inputPass) {
    echo "Login successfully !!";
} else {
    echo "Login failed !!";
}