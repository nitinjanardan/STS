<?php include 'header_teacher.php';?>
	
	<body>
		<br />
			<center><h2><b>Student Details</b></h2></center>
			
			<br />
		<form id="contacts-form" action="database.php" method ="POST">
			<fieldset style="margin-left:300px">
				
				<div class="field">
				  <label>Name:</label>
				  <input type="text" name= "sname" placeholder ="enter your name">
				</div>
				<div class="field">
				  <label>Mobile No.:</label>
				  <input type="text" name ="smobno" placeholder="enter your number">
				</div>
				<div class="field">
				  <label>Date Of Birth:</label>
				  <input type="date" name ="sdob" placeholder="dd/mm/yyyy">
				</div>
				<br />
				<div class="field">
				  <label>Course:</label>
				   <select name="course">
					<option> </option>
					<option value="btech">B.Tech</option>
					<option value="be">BE</option>
					 </select>
				</div>
				<div class="extra-field">
				  <label>Address:</label>
				  <textarea rows="3" cols ="10" name ="saddr" style ="height:100px"></textarea>
				</div>
				<br />
				<div class = "field">
				<label>Login (E-mail) </label>
				<input type = "text" name = "slogin" placeholder = "abcd@domain.com">
				</div>
				<div class = "field">
				<label>Password</label>
				<input type = "password" name = "spass" placeholder = "*******">
				</div>
				<br />
				<div class = "field">
				<center><input type="submit" name ="sinsert" value ="Insert" style = "height:30px;width:70px;color:black;"></center>
				</fieldset>
				<?php
				if(isset($_GET['msg']))
				{
					echo "<span style='color:green'>* ".$_GET['msg']."</span>";
				}?>
		</form>
	</body>
	<br />
	<br /><br /><br /><br /> <br />
	<br /><br /><br /><br /> <br />
	<br /><br /><br /><br /> <br />
<?php include 'footer.php'; ?>