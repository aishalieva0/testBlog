<?php
include('../../config/config.php');

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $id = $_GET['id'];

    $title = $_POST['title'];
    $desc = $_POST['description'];



    $category = $_POST['category'];
    $content = $_POST['content'];
    $is_monset = $_POST['is_monset'];
    $status = $_POST['status'];

    if (!empty($_FILES['img']['name'])) {
        $img_name = "image" . rand(0000000, 99999999) . "blog.jpeg";
        move_uploaded_file($_FILES['img']['tmp_name'], "../../uploads/" . $img_name);
    }

    if (!empty($_FILES['video']['name'])) {
        $video_name = "video" . rand(0000000, 99999999) . "blog.mp4";
        move_uploaded_file($_FILES['video']['tmp_name'], "../../uploads/" . $video_name);
    }

    $query =
        "UPDATE blog SET title='$title', description='$desc', image='$img_name', video='$video_name', cat_id= $category, content='$content', is_monset='$is_monset', created_at=now(), status='$status' WHERE id= $id";

    if (mysqli_query($db, $query)) {
        header("Location:../index.php?route=blog");
    }
}
