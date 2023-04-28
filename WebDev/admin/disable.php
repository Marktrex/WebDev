<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "update user set status= '0' where id='$id'"; //this will make the tiny int tp 1=true, 0=false
        $conn->query($sql);                                       //  or active/inactive
    }
    header('location:/webdev/admin/admindash.php');
    exit;
?>