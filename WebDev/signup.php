<?php
include("connection.php");

if(isset($_POST['submit'])){
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "select * from user where username = '$username' and email = '$email'";   
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){  
            echo  'Username or Email already exist! Please use a different one.';
        }  
        else{       
            $q = " INSERT INTO `user`(`fname`, `lname`, `email`, `username`, `password`) VALUES ( '$firstname', '$lastname', '$email', '$username', '$password')";
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
<link rel = "stylesheet" href = "styles folder/signup.css" type = "text/css">
<title>SIGNUP</title>
</head>

<body>
<div class="infotbl">
<form method="post">

<div>
    <div>
    <h1>SIGN UP</h1>
    </div>
    <label id="label1">FIRSTNAME: </label>
    <input type="text" name="fname" id="form" required>
    <br>
    <br>
    <label id="label2">LASTNAME: </label>
    <input type="text" name="lname" id="form" required> 
    <br>
    <br>
    <label id="label3">EMAIL: </label>
    <input type="text" name="email" id="form" required>
    <br>
    <br>
    <label id="label4">USERNAME: </label>
    <input type="text" name="username" id="form" required>
    <br>
    <br>
    <label id="label4">PASSWORD: </label>
    <input type="text" name="password" id="form" required>
    <br>
    <br>
    </div>
    <button id="btn1" type="submit" name="submit" href="/webdev/loginpage.php"> Submit </button>
    <a id="btn2" type="submit" name="cancel" href="/webdev/loginpage.php"> Cancel </a><br>
    </div>
</form>
</div>

</body>
</html>