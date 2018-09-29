<?php 
	include('function.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
                    
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="cap.jpg"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
					<button>
					
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</button>

				<?php endif ?>
			</div>
            <button>
					<a href="trial.php" button type="submit" class="btn" name="reg_user" >clearance</button>
						<button type="submit" class="btn" name="reg_user" >Logout</button>
					</button>
		</div>
	</div>
    
</body>
</html>