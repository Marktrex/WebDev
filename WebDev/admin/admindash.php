<!DOCTYPE html>
<html lang="en">
<head>
    <!-- use the 2 ".." tuldok to get the parent folder when your code is inside a folder that need to access another folder -->
    <link rel="stylesheet" href="../styles folder/admindash.css" type="text/css"> 
    <title>ADMIN</title>
</head>
<body>
    <div class="navbar">
    <a href="admindash.php" id="a1">Admin Dashboard</a>
    <a href="add.php" id="a2">Add</a>
    <a href="../loginpage.php" id="a3">Logout</a>
    </div>
    <div class="infotbl">
    <table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>EMAIL</th>
        <th>DATE JOINED</th>
        <th>USER TYPE</th>
        <th>STATUS</th>
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "select * from user";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
            <tr>
            <th>$row[id]</th>
            <td>$row[username]</td>
            <td>$row[password]</td>
            <td>$row[fname]</td>
            <td>$row[lname]</td>
            <td>$row[email]</td>
            <td>$row[join_date]</td>
            <td>$row[account_type]</td>
            <td>
            <a class='btnActive' href='active.php?id=$row[id]'>Active</a>
            <a class='btnDisable' href='disable.php?id=$row[id]'>Disable</a>
            $row[status]
            </td>
            <td> <a class='btnEdit' href='edit.php?id=$row[id]'>Edit</a></td>
            </tr>
           
            ";
        }
         
      ?>
     
    </tbody>
    </table>
    </div>
  </body>
</html>