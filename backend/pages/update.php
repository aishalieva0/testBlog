<?php
include('../../config/config.php');

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $id = $_GET['id'];

    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $is_menu = $_POST['is_menu'];
    $status = $_POST['status'];

    $query = "UPDATE pages SET title='$title',description='$description',content='$content', is_menu='$is_menu', created_at=now(), status='$status' WHERE id= '$id'";

    if (mysqli_query($db, $query)) {
        header("Location:../index.php?route=pages");
    }
}
