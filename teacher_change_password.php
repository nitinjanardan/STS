<?php include 'header_teacher.php';?>
	<body>
		<center><h2><b>Change Password For Teacher</b></h2></center>
		<form id="contacts-form" action="database.php" method ="POST" enctype="multipart/form-data">
			<fieldset style="margin-left:300px">
				<div class="field">
				  <label>Old Password:</label>
				  <input type="password" name="oldpass" placeholder ="********">
				</div>
				<div class="field">
				  <label>New Password:</label>
				  <input type="password" name= "newpass" placeholder ="********">
				</div>
				<div class="field">
				  <label>Confirm Password:</label>
				  <input type="password" name= "confirmpass" placeholder ="********">
				</div>
				<br />
				<div class = "field">
				<center><input type="submit" name ="tupdate" value ="Update" style = "height:30px;width:70px;color:black;"></center>
				</div>
			</fieldset>
		</form>
	</body>
	<br />
	<br /><br /><br /><br /> <br />
	<br /><br /><br /><br /> <br />
	<br /><br /><br /><br /> <br />
<?php include 'footer.php' ?>
