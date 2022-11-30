<?php
include '../config/config.php';

if($_SERVER["REQUEST_METHOD"]==='POST'){
    $title = $_POST['title'];
    $is_menu = $_POST['is_menu'];
    $status = $_POST['status'];

    $query="INSERT INTO categories (title, is_menu, status) VALUES ('$title', '$is_menu', '$status')";

    if (mysqli_query($db,$query)) {
    header("location:index.php?route=categories");    
    }
}