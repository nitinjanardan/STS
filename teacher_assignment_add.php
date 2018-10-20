<?php session_start();
include 'header_teacher.php';

$id=$_SESSION['login_usr'];
$name="";
			$con=mysqli_connect("localhost","root","","assignment"); // connect to databse
			$sel="SELECT teacher_name FROM teacher_detail where login_id='$id'";
			$qry=mysqli_query($con,$sel);
			while($row=mysqli_fetch_array($qry))
			{
				$name=$row[0];
			}	
			
			$c=0;
			$con=mysqli_connect("localhost","root","","assignment"); // connect to databse
			$sel="SELECT count(a_id) FROM teacher_assignment";
			$qry=mysqli_query($con,$sel);
			while($row=mysqli_fetch_array($qry))
			{
				$c=$row[0];
			}	
			$c++;
			
?>
	
	<body>
	<script>
		function getSubject()
		{
			var sem=document.getElementById("s1").value;
			if(sem=="1")
			{
				document.getElementById("s2").innerHTML="<option>Applied physics1</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Appiled Mathematics-1</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Fundamental of Engineering</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Basic civil Engineering</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Environment Ecology</option>";	
			}
			if(sem=="2")
			{
				document.getElementById("s2").innerHTML="<option>Electrical Engineering</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Appiled Mathematics-2</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Engineering Graphics</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Chemistry</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Communication Skill</option>";	
			}
			if(sem=="3")
			{
				document.getElementById("s2").innerHTML="<option>Basic Electronics</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Appiled Mathematics-3</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option> Problem Solving and Logic Building Using C</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Computational Science</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Digital Electronic and Logic Design</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option> Computer Concept of Web Technology</option>";	
			}
			if(sem=="4")
			{
				document.getElementById("s2").innerHTML="<option>Data Structures</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>C++</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Discrete Mathematics Structures</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Computational Mathematics</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Computer System Architecture</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Operating System</option>";	
			}
			if(sem=="5")
			{
				document.getElementById("s2").innerHTML="<option>Advance Data Structures</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Microproceesor</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>JAVA</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Theory of Computation</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Database Management System</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Unix</option>";	
			}
			if(sem=="6")
			{
				document.getElementById("s2").innerHTML="<option>Object Oriented and Modelling Design</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Computer Graphics</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Computer Networks</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Enterprise Resource Planning</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Compiler Design</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Software Engineering and Project Management</option>";	
			}
			if(sem=="7")
			{
				document.getElementById("s2").innerHTML="<option>Network Programming</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Cryptography</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Parallel Processing</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Cloud Computing</option>";	
				document.getElementById("s2").innerHTML=document.getElementById("s2").innerHTML+"<option>Mobile Computing and Application</option>";		
			}
		}
	</script>
		<center><h2><b>Uploading Assignment By Teacher</b></h2></center>
		<center>
		<div style = "text-align:right;width:70%">
		<a href = "teacher_assignment_view.php">Uploaded Assignment </a>
		</div>
		</center>
		<form id="contacts-form" action="database.php" method ="POST" enctype="multipart/form-data">
			<fieldset style="margin-left:300px">
				<div class="field">
				  <label>Assignment Id:</label>
				  <input type="text" name="id" value="<?php echo $c; ?>" readonly>
				</div>
				<div class="field">
				  <label>Assignment Name:</label>
				  <input type="text" name= "aname" placeholder ="enter your name">
				</div>
				<div class="field">
				  <label>Course:</label>
				   <select name="acourse">
					<option> </option>
					<option value="btech">B.Tech</option>
					<option value="be">BE</option>
				 </select>
				</div>
				<div class="field">
				  <label>Semester:</label>
				   <select name="asem" id="s1" onchange="getSubject()">
					<option> </option>
					<option value="1">First</option>
					<option value="2">Second</option>
					<option value="3">Third</option>
					<option value="4">Fourth</option>
					<option value="5">Fifth</option>
					<option value="6">Sixth</option>
					<option value="7">Seventh</option>
					
				   </select>
				</div>
				<div class="field">
				  <label>Subject:</label>
				   <select name="asubject" id="s2">
					<option> </option>
				   </select>
				</div>
				<div class="field">
				  <label>Last Date Of Submission:</label>
				  <input type = "date" name ="ldos" placeholder = "dd/mm/yyyy">
				</div>
				<br />
				<div class="field">
				  <label>Teacher Name:</label>
				  <input type = "text" name ="atname" placeholder = "name" value="<?php echo $name;?>" readonly>
				</div>
				<div class="field">
				  <label>Upload Date:</label>
				  <input type = "date" name ="adate" placeholder = "dd/mm/yyyy">
				</div>
				<br />
				<div class="field">
				  <label>Choose File:</label>
				  <input type = "file" name ="file" >
				</div>
				
				<br />
				<div class = "field">
				<center><input type="submit" name ="aupload" value ="Upload" style = "height:30px;width:70px;color:black;"></center>
				</div>
				<?php
				if(isset($_GET['msg']))
				{
					echo "<span style='color:green'>* ".$_GET['msg']."</span>";
				}?>
				</fieldset>
		</form>
	</body>
	<br />
	<br /><br /><br /><br /> <br />
	<br /><br /><br /><br /> <br />
	<br /><br /><br /><br /> <br />
<?php include 'footer.php'; ?>