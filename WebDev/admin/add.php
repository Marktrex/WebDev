<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $q = " INSERT INTO `user`(`fname`, `lname`, `email`, `username`, `password`) VALUES ( '$firstname', '$lastname', '$email', '$username', '$password')";
        $query = mysqli_query($conn,$q);
        echo  '<script>
            window.location.href = "../admin/admindash.php";
           </script>';
    }
    

?>

<!DOCTYPE html>
<html>
<head>
 <title>ADD</title>
 <link rel="stylesheet" href="../styles folder/edit.css" type="text/css">
 <link rel="stylesheet" href="../styles folder/admindash.css" type="text/css"> 
</head>

<body>

    <div class="navbar">
        <a href="admindash.php" id="a1">Admin Dashboard</a>
        <a href="add.php" id="a2">Add</a>
        <a href="../loginpage.php" id="a3">Logout</a>
    </div>

<div class="infotbl">
<form method="post">

<div>
    <div id="container1">
    <h1>Add Member</h1>
    </div>
    <br>
    <label id="label1"> FIRSTNAME: </label>
    <input type="text" name="fname" id="form" required>
    <br>
    <br>
    <label id="label2"> LASTNAME: </label>
    <input type="text" name="lname" id="form" required>
    <br>
    <br>
    <label id="label3"> EMAIL: </label>
    <input type="text" name="email" id="form" required>
    <br>
    <br>
    <label id="label4"> USERNAME: </label>
    <input type="text" name="username" id="form" required>
    <br>
    <br>
    <label id="label4"> PASSWORD: </label>
    <input type="text" name="password" id="form" required>
    <br>
    <br>

    <button id="btn1" type="submit" name="submit"> Submit </button> 
    <a id="btn2" type="submit" name="cancel" href="/webdev/admin/admindash.php"> Cancel </a><br>
    </div>
</form>
</div>
</body>
</html>