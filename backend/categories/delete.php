<?php

include '../config/config.php';

$id = $_GET['id'];

$delete = "DELETE FROM categories WHERE id= $id";

if (mysqli_query($db, $delete)) {
    header("location:index.php?route=categories");
}