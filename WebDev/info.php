<?php
        include "connection.php";
        $user = @$_SESSION['username'];
         $sql = mysql_query("SELECT * FROM `user` WHERE id='{$user}'")
          // $result = $conn->query($sql);
          // if(!$result){
          //   die("Invalid query!");
          // }
          while($row = mysql_fetch_assoc($sql)){
            echo "
              <tr>
              <th>$row[id]</th><br>
              <td>$row[username]</td><br>
              <td>$row[password]</td><br>
              <td>$row[fname]</td><br>
              <td>$row[lname]</td><br>
              <td>$row[email]</td><br>
              <td>$row[join_date]</td><br>
              <td>$row[account_type]</td><br>
          ";
        }
      ?>