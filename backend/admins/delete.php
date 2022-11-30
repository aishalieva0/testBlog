<?php
include_once('..\config\config.php');


    $del_id = $_GET['id'];
echo $del_id;
    $query = "DELETE FROM admin WHERE id=" .$del_id;
    $delete = mysqli_query($db, $query);

    if (mysqli_affected_rows($db) != 0) {
        header("Location:index.php?route=admins");
    }

