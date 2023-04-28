<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password']; 

        $sql = "select * from user where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
     
        if($row["account_type"] == "admin"){  
            header("Location: admin/admindash.php");
        }
        else if($row["account_type"] == "user"){ 
            if($row["status"] == "1"){
                header("Location: index.php");
            }
            else{
                echo '<script>
                window.location.href = "loginpage.php";
                alert("This account is temporarily disabled!")
                </script>';
            }
        }
        else{       
            echo  '<script>
                    window.location.href = "loginpage.php";
                    alert("Login failed. Invalid username or password!!")
                    </script>';
            }      
    }
    ?>