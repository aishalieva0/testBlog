<?php

include '../../config/config.php';

$id = $_GET['id'];

$delete = "DELETE FROM settings WHERE id= $id";

if (mysqli_query($db, $delete)) {
    header("location:index.php?route=settings");
}