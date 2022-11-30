<?php

$db= mysqli_connect('localhost','root','','blog');

if(!$db){
    die("failed to connect to MySql: ". mysqli_connect_error());
}
?>