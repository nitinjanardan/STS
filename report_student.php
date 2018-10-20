<?php 
	include 'header_admin.php ';
	$con=mysqli_connect("localhost","root","","assignment");
?>
	<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 78%;
}

td, th {
    border: 1px solid black;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: aqua;
}
</style>
</head>
	<body>
	 <br />
		<center><h2><b>Uploaded Assignment</b></h2></center>
	 <br />
		<table style="margin-left : 160px;">
			<tr>
				<th>S.no</th>
				<th>Student Name</th>
				<th>Mobile No</th>
				<th>Date of Birth</th>
				<th>Course</th>
				<th>Address</th>
				<th>Login ID</th>
			</tr>
			<?php
			$r=0;
			$sel="SELECT * FROM student_detail";
			$qry=mysqli_query($con,$sel);
			while($row=mysqli_fetch_array($qry))
			{
				$r++;
				echo"<tr>";
				echo"<td>$r</td>";
				echo"<td>$row[0]</td>";
				echo"<td>$row[1]</td>";
				echo"<td>$row[2]</td>";
				echo"<td>$row[3]</td>";
				echo"<td>$row[4]</td>";
				echo"<td>$row[5]</td>";
				echo"</tr>";
			}	
			?>
		</table>
	</body>
	<br /><br /><br /><br /><br /><br /><br />
	<br /><br /><br /><br /><br /><br /><br />
	<br /><br /><br /><br /><br /><br /><br /><br /><br />
	<br />
<?php include 'footer.php' ?>