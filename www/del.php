<?php
require_once 'connect.php';
require_once 'security.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($dbcon, (int) $_GET['id']);
    $sql = "DELETE FROM posts WHERE id = '$id'";
    $result = mysqli_query($dbcon, $sql);

    if ($result) {
        header('location: index.php');
    } else {
        echo "删除失败!" . mysqli_connect_error();
    }
}
mysqli_close($dbcon);