<?php
include('../../config/config.php');

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $id = $_GET['id'];

    $title = $_POST['title'];
    $is_menu = $_POST['is_menu'];
    $status = $_POST['status'];

    $query = "UPDATE categories SET title='$title', is_menu='$is_menu', status='$status' WHERE id= '$id'";

    if (mysqli_query($db, $query)) {
        header("Location:../index.php?route=categories");
    }
}
