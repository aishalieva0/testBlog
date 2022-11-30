<?php
include('../../config/config.php');


if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $id = $_GET['id'];

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $status = $_POST['status'];



    if (!empty($password)) {
        $password = md5($password);
        $query = "UPDATE admin SET name='$name', surname='$surname', email='$email', password='$password', username='$username', status='$status' WHERE id= '$id'";
    } else {
        $query = "UPDATE admin SET name='$name', surname='$surname', email='$email', username='$username', status='$status' WHERE id = '$id'";
    }

    if (mysqli_query($db, $query)) {
        header("Location:../index.php?route=admins");
    }
}
