<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $account_type = $_POST['account_type'];
        $sql = "select * from user where username = '$username'";   
        // and email = '$email'
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){  
            echo  '<script>
            
            alert("Username is already taken!")
           </script>';
        }  
        else{       
            
            $q = " INSERT INTO `user`(`username`, `password`,`fname`, `lname`, `email`, `account_type`) VALUES ('$username', '$password','$firstname', '$lastname', '$email', '$account_type' )";
            $query = mysqli_query($conn,$q); 
            echo  '<script>
            window.location.href="/webdev/loginpage.php";
            alert("Successfully Created!")
           </script>';
        }     
        
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
    <label id="label1"> USER TYPE: </label>
    <input type="text" name="account_type" id="form">
    <br>
    <br>
    <label id="label2"> USERNAME: </label>
    <input type="text" name="username" id="form">
    <br>
    <br>
    <label id="label3"> PASSWORD: </label>
    <input type="text" name="password" id="form">
    <br>
    <br>
    <label id="label4"> FIRSTNAME: </label>
    <input type="text" name="fname" id="form">
    <br>
    <br>
    <label id="label5"> LASTNAME: </label>
    <input type="text" name="lname" id="form">
    <br>
    <br>
    <label id="label6"> EMAIL: </label>
    <input type="text" name="email" id="form">
    <br>
    <br>
    
    
    <button id="btn1" type="submit" name="submit"> Submit </button> 
    <a id="btn2" type="submit" name="cancel" href="/webdev/admin/admindash.php"> Cancel </a><br>
    </div>
</form>
</div>
</body>
</html>