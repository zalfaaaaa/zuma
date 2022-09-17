<?php

$nama = $_POST['nama'];
$photo = $_POST['photo'];
$harga = $_POST['harga'];
$id = $_POST['id'];

$database = new PDO('mysql:host=localhost;dbname=mizuri', 'root', '');
$query = $database->query("UPDATE `mr_menu` SET `nama` = '$nama', `photo` = '$photo', `harga` = '$harga' WHERE `id`= '$id'");

if($query){
    header("Location:menu.php");
}

