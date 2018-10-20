<?php include 'header_teacher.php';?>
	<body>
		<center><h2><b>Edit Profile For Teacher</b></h2></center>
		<form id="contacts-form" action="database.php" method ="POST" enctype="multipart/form-data">
			<fieldset style="margin-left:300px">
				<div class="field">
				  <label>Name:</label>
				  <input type="text" name="tname" placeholder ="Enter name">
				</div>
				<div class="field">
				  <label>Mobile No:</label>
				  <input type="text" name= "mobno" placeholder ="Enter number">
				</div>
				<div class="field">
				  <label>DOB:</label>
				  <input type="date" name= "dob" placeholder ="dd/mm/yyyy">
				</div>
				<br />
				<div class="field">
				  <label>Qualification:</label>
				   <select name="course">
					<option> </option>
					<option value="btech">B.Tech</option>
					<option value="be">BE</option>
					<option value="phd">Phd</option>
					<option value="bsc">Bsc</option>
				   </select>
				</div>
				<div class="extra-field">
				  <label>Address:</label>
				  <textarea rows="3" cols ="10" name ="addr" style ="height:100px"></textarea>
				</div>
				<br />
				<div class = "field">
				<input type="submit" name ="eptupdate" value ="Update" style = "height:30px;width:70px;color:black;margin-left:300px;">
				<a href ="teacher_change_password.php" style ="margin-left:100px;">Change Password </a>
				</div>
			</fieldset>
		</form>
	</body>
	
	<div style = "height :130px">
	</div>
<?php include 'footer.php' ?>
