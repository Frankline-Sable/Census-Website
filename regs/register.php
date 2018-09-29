<?php include('function.php') ?>
<?php include('data.php') ?>
<!DOCTYPE html>
<html>
<head>
    
  <title>Registration system</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <img src="logo.jpg" align="center" >
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
     
  	<?php include('error.php');
      echo display_error();?>
      <div class="input-group">
  	  <label>firstname</label>
  	  <input type="text" name="firstname" value="<?php echo $firstname; ?>">
  	</div>
      <div class="input-group">
  	  <label>lastname</label>
  	  <input type="text" name="lastname" value="<?php echo $lastname; ?>">
  	</div>
      <div>
      <label>School Id</label><br>
  	  <input type="text" name="id" value="<?php echo $id; ?>">
  	</div>
  	<div class="input-group">
        <label>Username</label><p><i>student Id no strokes</i></p>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
	  <div class="input-group">
        <label>My Course</label>
  	  <input type="button" name="Course" value="Course">
  	</div>
      <div class="input-group">
          <label>Faculty of</label>
          <select type="text" name="faculty" id="faculty" value="<?php echo $faculty; ?>">
              <option>Education and arts</option>
              <option>Information science and technology</option>
              <option>Business and economics</option>
              <option>Pure and applied science</option>
          </select>
      </div>
      <div class="input-group">
      </div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>