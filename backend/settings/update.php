<?php
include('../../config/config.php');

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $id = $_GET['id'];

    $_key = $_POST['_key'];
    $value = $_POST['value'];
    $status = $_POST['status'];


    $query = "UPDATE settings SET _key='$_key', value='$value', status='$status' WHERE id= '$id'";

    if (mysqli_query($db, $query)) {
        header("Location:../index.php?route=settings");
    }
}
