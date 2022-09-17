<?php

session_start();

$id= $_GET['id'];

$db = new PDO('mysql:host=localhost;dbname=mizuri','root',''); 
$query = $db->query("DELETE FROM `mr_menu` WHERE `id`='$id'");

if($query){
    header('location:menu.php');}