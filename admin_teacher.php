<?php include 'header_admin.php';?>
	
	<body>
		<center><h2><b>Teacher Details</b></h2></center>
			
		<form id="contacts-form" action="database.php" method ="POST">
			<fieldset style="margin-left:300px">
				
				<div class="field">
				  <label>Name:</label>
				  <input type="text" name= "tname" placeholder ="enter your name">
				</div>
				<div class="field">
				  <label>Mobile No.:</label>
				  <input type="text" name ="tmobno" placeholder="enter your number">
				</div>
				<div class="field">
				  <label>Date Of Birth:</label>
				  <input type="date" name ="tdob" placeholder="dd/mm/yyyy">
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
				<label>Login(E-mail)</label>
				<input type = "text" name = "alogin" placeholder= "abcd@domain.com">
				</div>
				<div class = "field">
				<label>Password </label>
				<input type = "password" name = "apass" placeholder = "********">
				</div>
				<br />
				<div class = "field">
				<center><input type="submit" name ="insert" value ="Add Teacher" style = "height:30px;width:100px;color:black;"></center>
				</div>
					<?php
						if(isset($_GET['msg']))
						{
							echo "<span style='color:green'>".$_GET['msg']."</span>";
						}?>
				</fieldset>
		</form>
	</body>
	<br />
	<br /><br /><br /><br /> <br />
	<br /><br /><br /><br /> <br />
	<br /><br /><br /><br /> <br />
<?php include 'footer.php'; ?>