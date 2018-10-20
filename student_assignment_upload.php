<?php include 'header_student.php' ;

$id="";
if(isset($_GET['id']))
	$id=$_GET['id'];

?>

	<body>
	<center><h2><b>Uploading Assignment By Student</b></h2></center>
		<br />
	<form id="contacts-form" action="database.php" method ="POST" enctype="multipart/form-data">
			<fieldset style="margin-left:300px">
				<div class="field">
				  <label>S.no:</label>
				  <input type="text" name="sno" >
				</div>
				<div class="field">
				  <label>Assignment No:</label>
				  <input type="text" name="assignno" value="<?php echo $id;?>" readonly>				   
				  </div> 
				<div class="field">
				  <label>Student Name:</label>
				  <input type="text" name= "sname" placeholder ="enter your name">
				</div>
				<div class="field">
				  <label>Submit Date:</label>
				  <input type="date" name= "sdate" placeholder ="dd/mm/yyyy">
				</div>
				<br />
				<div class="field">
				  <label>Choose file:</label>
				  <input type="file" name = "file">
				</div>
				<br />
				<div class ="field">
				<center><input type="submit" name ="saupload" value ="Insert" style ="height:30px;width:70px;color:black;"></center>
				</div>
				
			</fieldset>
		</form>		
	</body>
	<br /><br /><br /><br /><br />
	<br /><br /><br /><br /><br />
	
	<?php include 'footer.php' ?> 