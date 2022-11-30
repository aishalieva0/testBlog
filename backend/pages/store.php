<?php
include '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $content = $_POST['content'];
    $is_menu = $_POST['is_menu'];
    $status = $_POST['status'];

    $query = "INSERT INTO pages (title, description, content, is_menu, created_at, status) VALUES ('$title', '$desc', '$content', '$is_menu', now(), '$status')";

    if (mysqli_query($db, $query)) {
        header("location:index.php?route=pages");
    }
}
