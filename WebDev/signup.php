<?php
include("connection.php");

if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
                
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
            $q = " INSERT INTO `user`(`username`, `password`,`fname`, `lname`, `email`, `account_type`, `status`) VALUES ('$username', '$password','$firstname', '$lastname', '$email', 'user', '1' )";
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
    <label id="label1">USERNAME: </label>
    <input type="text" name="username" id="form" required>
    <br>
    <br>
    <label id="label2">PASSWORD: </label>
    <input type="text" name="password" id="form" required>
    <br>
    <br>
    <label id="label3">FIRSTNAME: </label>
    <input type="text" name="fname" id="form" required>
    <br>
    <br>
    <label id="label4">LASTNAME: </label>
    <input type="text" name="lname" id="form" required> 
    <br>
    <br>
    <label id="label5">EMAIL: </label>
    <input type="text" name="email" id="form" required>
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