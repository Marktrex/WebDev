<?php
  include "connection.php";
  $id="";
  $firstname="";
  $lastname="";
  $email="";
  $username="";
  $password="";
  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:admin/admindash.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from user where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: admin/admindash.php");
      exit;
    }
    $firstname=$row["fname"];
    $lastname=$row["lname"];
    $email=$row["email"];
    $username=$row["username"];
    $password=$row["password"];
  }
  else{
    $id = $_POST["id"];
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql = "update user set fname='$firstname', lname='$lastname', email='$email', username='$username', password='$password' where id='$id'";
    $result = $conn->query($sql);
    echo  '<script>
    window.location.href = "../admin/admindash.php";
   </script>';
  }

  ?>
<!DOCTYPE html>
<html>
<head>
 <title>UPDATE</title>
 <link rel="stylesheet" href="../styles folder/edit.css" type="text/css">
 <link rel="stylesheet" href="../styles folder/admindash.css" type="text/css"> 
</head>

<body>
    <div class="navbar">
        <a href="admindash.php" id="a1">Admin Dashboard</a>
        <a href="add.php#" id="a2">Add</a>
        <a href="../loginpage.php" id="a3">Logout</a>
    </div>

<div class="infotbl">
<form method="post">

    <div id="container1">
    <h1>Update Member</h1>
    </div>
    <br>
    <input type="hidden" name="id" value="<?php echo $id; ?>" id="form"><br>
    <label id="label1"> FIRSTNAME: </label>
    <input type="text" name="fname" value="<?php echo $firstname; ?>" id="form">
    <br>
    <br>
    <label id="label2"> LASTNAME: </label>
    <input type="text" name="lname" value="<?php echo $lastname; ?>" id="form">
    <br>
    <br>
    <label id="label3"> EMAIL: </label>
    <input type="text" name="email" value="<?php echo $email; ?>" id="form">
    <br>
    <br>
    <label id="label4"> USERNAME: </label>
    <input type="text" name="username" value="<?php echo $username; ?>" id="form">
    <br>
    <br>
    <label id="label5"> PASSWORD: </label>
    <input type="text" name="password" value="<?php echo $password; ?>" id="form">
    <br>
    <br>

    <button id="btn1" type="submit" name="submit"> Submit </button> 
    <a id="btn2" type="submit" name="cancel" href="/webdev/admin/admindash.php"> Cancel </a><br>

</form>
</div>
</body>
</html>

