<?php 

session_start();

$secretPassword="111";
if ($_POST['password']==$secretPassword) {
    $_SESSION["login"]="on";
    header("location: admin.php");
} else {
    header("location: login.php");
};



?>