<?php

include('data.php');

// initializing variables
$firstname = "";
$lastname = "";
$id ="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'regist');

// REGISTER USER
 if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
 $id = mysqli_real_escape_string($db, $_POST['id']);}
 
  ?> 
<!DOCTYPE html>
<html>
    <body>
<table>
    
	<thead>
		<tr>
			<th>firstname</th>
			<th>lastname</th>
			
		</tr>
	</thead>
<?php	
	$user_check_query = "SELECT * FROM users WHERE firstname='$firstname' OR lastname='$lastname' LIMIT ";
  $result = mysqli_query($db, $user_check_query);
  $query = "INSERT INTO users (firstname,lastname) 
  			  VALUES('$firstname','$lastname')";
  	mysqli_query($db, $query);?>
		
	
</table>
    </body>
</html>
