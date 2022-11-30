<?php

include '../../config/config.php';

$id = $_GET['id'];

$delete = "DELETE FROM blog WHERE id= $id";

if (mysqli_query($db, $delete)) {
    header("location:index.php?route=blog");
}