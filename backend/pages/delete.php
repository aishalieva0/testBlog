<?php

include '../../config/config.php';

$id = $_GET['id'];

$delete = "DELETE FROM pages WHERE id= $id";

if (mysqli_query($db, $delete)) {
    header("location:index.php?route=pages");
}