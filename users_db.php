<?php

	$username='sk2437';
	$password='headroom5';
	$hostname='sql2.njit.edu';


	$dsn='mysql:host=sql2.njit.edu;dbname=sk2437';
	$username='sk2437';
	$password='headroom5';
 
  $result=("SELECT * FROM users");
            while($row=mysql_fetch_array($result))
            
            <tr>
                <td align='center'>
                </td>
                <td align="center"><?php print($row['id']) ?></td>
                <td align="center"><?php print($row['email']) ?></td>
                <td align="center"><?php print($row['fname']) ?></td>
                <td align="center"><?php print($row['lname']) ?></td>
                <td align="center"><?php print($row['phone']) ?></td>
                <td align="center"><?php print($row['birthdate']) ?></td>
                <td align="center"><?php print($row['gender']) ?></td>
                <td align="center"><?php print($row['password']) ?></td>
            </tr>
            
  $query = "INSERT INTO users
             (id, email, fname,lname, phone, birthdate, gender, password)
          VALUES
             (:id, :email, :fname, :lname, :phone, :birthdate, :gender, :password)";
             
  $query = "UPDATE users
          SET passwords = :password";
          
  $query ="DELETE FROM users WHERE id=:id";


 
?>
