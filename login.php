<?php include 'header.php'; ?>
<html>
	<head>
		<title>Log In</title>
		
	</head>
		
		<body>
			<center><h2>Login</h2> </center>
		<form id="contacts-form" action="database.php" method="POST">
			<fieldset style="margin-left:500px">
            <div class="field">
              <label>Email:</label>
              <input type="text" name="email" placeholder ="abcd@domain.com">
            </div>
            <div class="field">
              <label>Password:</label>
              <input type="Password" name= "password" placeholder ="********">
            </div>
			<br />
			<div class = "field">
			<input type="submit" value="submit" name="login" style = "height:30px;width:70px;color:black;margin-left:210px;">		
			</div>
			<?php
			if(isset($_GET['re']))
			{
				echo "<span style='color:red'>* ".$_GET['re']."</span>";
			}?>
			<?php
			if(isset($_GET['err']))
			{
				echo "<span style='color:red'>* ".$_GET['err']."</span>";
			}?>
			</fieldset>
			
		</form>		
		
	</body>
	<div style = "height: 293px">
	</div>
<?php include 'footer.php' ?>