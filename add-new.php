<?php 
require("./config.php");

session_start();
if (!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
    header("location: login.php");
}

if (!isset($_POST["sale"])) {
    $_POST["sale"]=NULL;
}
if (!isset($_POST["new"])) {
    $_POST["new"]=NULL;
}

if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"]!="") {
    move_uploaded_file($_FILES["image"]["tmp_name"], "./img/products/" . $_FILES["image"]["name"]);
    $fileName=$_FILES["image"]["name"];
} else {
    $fileName="nophoto.jpg";
}

$sql="INSERT INTO products (title, price, description, img, category, sale, new) 
        VALUES (:title, :price, :description, :img, :category, :sale, :new)";

$stmt=$db->prepare($sql);

$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":price", $_POST["price"]);
$stmt->bindValue(":description", $_POST["description"]);
$stmt->bindValue(":img", $fileName);
$stmt->bindValue(":category", $_POST["category"]);
$stmt->bindValue(":sale", $_POST["sale"]);
$stmt->bindValue(":new", $_POST["new"]);


$stmt->execute();

header("location: admin-success.php");


echo("<pre>");
print_r($_POST);
echo("</pre>");
?>