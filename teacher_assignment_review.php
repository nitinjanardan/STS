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

$a_id="";
$sname="";			
if(isset($_GET['id']))
{
	$a_id=$_GET['id'];
	$sname=$_GET['name'];
}
	
			$c=0;
			$sel="SELECT count(id) FROM review_detail";
			$qry=mysqli_query($con,$sel);
			while($row=mysqli_fetch_array($qry))
			{
				$c=$row[0];
			}	
			$c++;
?>
	
	<body>
		<center><h2><b> Assignment Reviewed By Teacher</b></h2></center>
		<form id="contacts-form" action="database.php" method ="POST" enctype="multipart/form-data">
			<fieldset style="margin-left:300px">
				<div class="field">
				  <label>Review Id:</label>
				  <input type="text" name="id" value="<?php echo $c;?>" readonly>
				</div>
				<div class="field">
				  <label>Assignment Code:</label>
				  <input type="text" name= "acode" value="<?php echo $a_id;?>" readonly>
				</div>
				<br />
				<div class="field">
				  <label>Uploaded By:</label>
				  <input type = "text" name ="sname" value="<?php echo $sname;?>" readonly >
				</div>
				<div class="field">
				  <label>Teacher Name:</label>
				  <input type = "text" name ="tname"  value="<?php echo $name;?>" readonly>
				</div>
				<div class="extra-field">
				  <label>Review:</label>
				  <textarea rows="3" cols ="10" name ="review" style ="height:100px;width:277px"></textarea>
				</div>
				<br />
				<div class = "field">
				<center><input type="submit" name ="rinsert" value ="Insert" style = "height:30px;width:70px;color:black;"></center>
				</div>
				</fieldset>
		</form>
	</body>
	<br />
	<br /><br /><br /><br /> <br />
	<br /><br /><br /><br /> <br />
	<br /><br /><br /><br /> <br />
<?php include 'footer.php'; ?>