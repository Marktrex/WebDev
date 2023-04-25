<?php 
include("connection.php");
include("login.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles folder/loginpage.css" type="text/css">
  <title>LOGIN</title>
</head>
<body>
    
<div>
    <div class = "rectangle1"><img src="images folder/adobo.jpg"></div>
    <div class = "rectangle2"><img src="images folder/arrozcaldo.jpg"></div>
    <div class = "rectangle3"><img src="images folder/lumpia.jpg"></div>
    <div class = "rectangle4"><img src="images folder/papaitan.jpg"></div>
    <div class = "rectangle5"><img src="images folder/sinigang.jpg"></div>
    <div class = "rectangle6"><img src="images folder/sisig.jpg"></div>
</div>

<div>
    <h1 class = "header1">Home Sweet Home</h1> 
    <br>
    <p class = "p1">Learn how to create your favorite restaurant dishes at home.</p>
</div>

<div class="box_center">
    <div class = "login_box">
        <h3 class = "Login">LOGIN</h3>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <input type="text" id="user" name="username" placeholder="Username">
                <input type="password" id="pass" name="password" placeholder="Password">
                <input type="submit" id="btn" value="Login" name = "submit"/>
                <a href="loginpage.php" class = "signup">Not yet a member? Sign up</a>
        </form>
        </div>
</div>
       
        <script>
            function isvalid(){
                var username = document.form.user.value;
                var password = document.form.pass.value;
                if(username.length=="" & password.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(username.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(password.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>


</body>
</html>