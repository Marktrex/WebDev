<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from admin where admin_user = '$username' and admin_pass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: admin/admindash.php");
        }  
        else{       
            echo  '<script>
                        window.location.href = "loginpage.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
    ?>