<?php
include '../config/config.php';

if($_SERVER["REQUEST_METHOD"]==='POST'){
    $_key = $_POST['_key'];
    $value = $_POST['value'];
    $status = $_POST['status'];

    $query="INSERT INTO settings (_key, value, status) VALUES ('$_key', '$value', '$status')";

    if (mysqli_query($db,$query)) {
    header("location:index.php?route=settings");    
    }
}