<?php 
	include 'header_student.php'; 
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
		<center><h2><b>Assignment</b></h2></center>
	 <br />
		<table style="margin-left : 160px;">
			<tr>
				<th>S.no</th>
				<th>Assignment</th>
				<th>Uploaded By</th>
				<th>Upload Date</th>
				<th>Last Submition Date</th>
				<th>Download</th>
				<th>Upload</th>
			</tr>
			<?php
			$sel="SELECT * FROM  teacher_assignment";
			$qry=mysqli_query($con,$sel);
			while($row=mysqli_fetch_array($qry))
			{
				echo"<tr>";
				echo"<td>$row[0]</td>";
				echo"<td>$row[1]</td>";
				echo"<td>$row[6]</td>";
				echo"<td>$row[7]</td>";
				echo"<td>$row[5]</td>";
				echo"<td><a href='Download_File.php?id=$row[0].pdf'>Link</a></td>";
				echo"<td><a href='student_assignment_upload.php?id=$row[0]'>Link</a></td>";
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