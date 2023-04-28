<style type = "text/css">
  .active{
    background-color: #FF0000 ;
  }
</style>

<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "update user set status= '1' where id='$id'"; //this will make the tiny int to 1=true, 0=false
        $conn->query($sql);                                       //  or active/inactive
        if($row["status"] == "1"){
          $id = '.active';
      }
      else{
        $id = '.active';
      }
    }
    header('location:/webdev/admin/admindash.php');
    exit;
