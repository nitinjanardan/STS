<?php
	session_start();
$con=mysqli_connect("localhost","root","","assignment"); // connect to databse
// simple login whether it is  admin or someone
if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$_SESSION['login_usr']=$email;
		
		if(empty($email && $pass))
		{
			$msg3="Please fill empty field";
			header('location:login.php?re='.$msg3);
		}
		else
		{
			$flag=false;
			$role="";
			$sel2="SELECT role FROM login_detail WHERE login_id='$email' AND password='$pass'" ;
			$qry=mysqli_query($con,$sel2);
			while($row=mysqli_fetch_array($qry))
			{
				$flag=true;
				$role=$row[0];
			}
			if($flag == true)
			{	
				if($role=="admin")
					header('location: admin_teacher.php');
				if($role=="teacher")
					header('location: teacher_assignment_add.php');
				if($role=="student")
					header('location: student_assignment_view.php');
			}
			else
			{
				header('location: login.php?err=enter valid email id or password');
			}
		}
	}
	// admin view for teacher details page name = admin_teacher.php
elseif(isset($_POST['insert']))
	{
		// fetching data from front-end 
		$teacher_name = $_POST['tname'];
		$teacher_mobno = $_POST['tmobno'];
		$teacher_dob = $_POST['tdob'];
		$teacher_qualification = $_POST['course'];
		$teacher_addr = $_POST['addr'];
		$login = $_POST['alogin'];
		$password = $_POST['apass'];
		//inserting in to database
		$ins= "INSERT INTO teacher_detail VALUES('$teacher_name','$teacher_mobno','$teacher_dob','$teacher_qualification','$teacher_addr','$login')";
		$qry = mysqli_query($con,$ins);
		$ins1 = "INSERT INTO login_detail VALUES ('$login','$password','teacher')";
		$qry1 = mysqli_query($con,$ins1);
		
		header('location: admin_teacher.php?msg=Teacher Added Successfully');
	}
	// student details page name = teacher_student.php
elseif(isset($_POST['sinsert']))	
	{
		// fetching data from front-end
		$student_name = $_POST['sname'];
		$student_mobno = $_POST['smobno'];
		$student_dob = $_POST['sdob'];
		$student_course = $_POST['course'];
		$student_addr = $_POST['saddr'];
		$login = $_POST['slogin'];
		$password = $_POST['spass'];
		// inserting to database 
		$ins = "INSERT INTO student_detail VALUES ('$student_name','$student_mobno','$student_dob','$student_course','$student_addr','$login')";
		echo $ins;
		$qry = mysqli_query($con,$ins);
		$ins1 = "INSERT INTO login_detail VALUES ('$login','$password','student')";
		$qry1 = mysqli_query($con,$ins1);
		header('location: teacher_student.php?msg=Student Added Successfully');
	}
	// uploading assignment by teacher, page name = teacher_asssignment_add.php
elseif(isset($_POST['aupload']))
	{
		// fetching data from front-end
		$assignment_id = $_POST['id'];
		$assignment_name = $_POST['aname'];
		$assignment_course = $_POST['acourse'];
		$assignment_sem = $_POST['asem'];
		$assignment_subject = $_POST['asubject'];
		$assignment_lastdate = $_POST['ldos'];
		$assignment_teachername = $_POST['atname'];
		$assignment_uploaddate = $_POST['adate'];
		
		// inserting into database
		$ins = "INSERT INTO teacher_assignment VALUES ('$assignment_id','$assignment_name','$assignment_course','$assignment_sem','$assignment_subject','$assignment_lastdate','$assignment_teachername','$assignment_uploaddate')";
		$qry = mysqli_query($con,$ins);
		// uploading file to Teacher folder
		move_uploaded_file($_FILES["file"]["tmp_name"], "upload/Teacher/".$assignment_id.".pdf");
		header('location: teacher_assignment_add.php?msg=Uploaded Successfully');
	}
	// uploading assignment by student , page name = student_assignment_upload.php
elseif (isset($_POST['saupload']))
	{
			// fetching data from front end
			$id = $_POST['sno'];
			$sassignment_no = $_POST['assignno'];
			$student_name = $_POST['sname'];
			$submit_date = $_POST['sdate'];
			// inserting into dataabase
			$ins = "INSERT INTO student_assignment VALUES('$id','$sassignment_no','$student_name','$submit_date')";
			$qry = mysqli_query($con,$ins);
			
			// uploading file to Student folder
			move_uploaded_file($_FILES["file"]["tmp_name"],"upload/Student/".$id.".pdf");
	}	
	// assignment reviewed by teacher , page name = teacher_assignment_review.php

elseif (isset($_POST['rinsert']))
	{
		// fetching data from front - end
		$id = $_POST['id'];
		$assignment_code = $_POST['acode'];
		$name = $_POST['sname'];
		$teacher_name = $_POST['tname'];
		$review = $_POST['review'];
		// inserting into database
		$ins = "INSERT INTO review_detail VALUES ('$id','$assignment_code','$name','$teacher_name','$review')";
		$qry = mysqli_query($con,$ins);
	}
	// change password for teacher ,page name = teacher_change_password
elseif (isset($_POST['tupdate']))
	{
		$old = $_POST['oldpass'];
		$new = $_POST['newpass'];
		$confirm = $_POST['confirmpass'];
		if($new == $confirm)
		{
			// update query for changing password
			$update = "UPDATE login_detail SET password= '$new'WHERE role = 'teacher'";
			$qry = mysqli_query($con,$update);
		}
		else
			echo "Enter correct password";
	}	
	// change password for Student ,page name = student_change_password
elseif (isset($_POST['stupdate']))
	{
		$old = $_POST['oldpass'];
		$new = $_POST['newpass'];
		$confirm = $_POST['confirmpass'];
		if($new == $confirm)
		{
			// update query for changing password
			$update = "UPDATE login_detail SET password= '$new'WHERE role = 'student'";
			$qry = mysqli_query($con,$update);
		}
		else
			echo "Enter correct password";
	}
	// edit profile for teacher or update prfile for teacher , page name=teacher_profile.php
elseif(isset($_POST['eptupdate']))
	{
		$name = $_POST['tname'];
		$mobno = $_POST['mobno'];
		$dob = $_POST['dob'];
		$qualification = $_POST['course'];
		$addr = $_POST['addr'];
		// update query for edit profile 
		$update = "UPDATE teacher_detail SET teacher_name='$name',teacher_mobno='$mobno',teacher_dob='$dob',teacher_qualification='$qualification',teacher_addr='$addr' WHERE login_id = 'nitn@gmail.com'";
		$qry = mysqli_query($con,$update);
	}
		// edit profile for teacher or update prfile for teacher , page name=student_profile.php
elseif(isset($_POST['epsupdate']))
	{
		$name = $_POST['sname'];
		$mobno = $_POST['mobno'];
		$dob = $_POST['dob'];
		$qualification = $_POST['course'];
		$addr = $_POST['addr'];
		// update query for edit profile 
		$update = "UPDATE student_detail SET student_name='$name',student_mob='$mobno',student_dob='$dob',student_course='$qualification',student_addr='$addr' WHERE login_id = 'abcde@gmail.com'";
		$qry = mysqli_query($con,$update);
	}
?>