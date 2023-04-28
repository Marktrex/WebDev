<?php
  include "connection.php";
  
  $id="";
  $username="";
  $password="";
  $firstname="";
  $lastname="";
  $account_type="";
  $email="";
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
    $username=$row["username"];
    $password=$row["password"];
    $firstname=$row["fname"];
    $lastname=$row["lname"];
    $email=$row["email"];
    $account_type=$row["account_type"];
      }
  else{

    if(isset($_POST['submit'])){
    $id = $_POST["id"];
    
    $account_type=$_POST["account_type"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $email=$_POST["email"];
   
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
          $sql = "update user set username='$username', password='$password', fname='$firstname', lname='$lastname', email='$email', account_type='$account_type' where id='$id'";
            // $query = mysqli_query($conn,$q); 
            $result = $conn->query($sql);
            echo  '<script>
            window.location.href = "../admin/admindash.php";
            alert("Successfully Edited!")
          </script>';
        }     
      }
    
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
    <input type="hidden" name="id" value="<?php echo $id; ?>" id="form" required><br>
    <label id="label1"> USER TYPE: </label>
    <input type="text" name="account_type" value="<?php echo $account_type; ?>" id="form" >
    <br>
    <br>
    <label id="label2"> USERNAME: </label>
    <input type="text" name="username" value="<?php echo $username; ?>" id="form" >
    <br>
    <br>
    <label id="label3"> PASSWORD: </label>
    <input type="text" name="password" value="<?php echo $password; ?>" id="form" >
    <br>
    <br>
    <label id="label4"> FIRSTNAME: </label>
    <input type="text" name="fname" value="<?php echo $firstname; ?>" id="form" >
    <br>
    <br>
    <label id="label5"> LASTNAME: </label>
    <input type="text" name="lname" value="<?php echo $lastname; ?>" id="form" >
    <br>
    <br>
    <label id="label6"> EMAIL: </label>
    <input type="text" name="email" value="<?php echo $email; ?>" id="form" > 
    <br> 
    <br>
  

    <button id="btn1" type="submit" name="submit"> Submit </button> 
    <a id="btn2" type="submit" name="cancel" href="/webdev/admin/admindash.php"> Cancel </a><br>

</form>
</div>
</body>
</html>

