<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `user` where id=$id";
        $conn->query($sql);
    }
    header('location:/webdev/admin/admindash.php');
    exit;
?>