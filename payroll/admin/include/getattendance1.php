<?php
	if(isset($_POST["btnsubmit"]))
	{
		include "dbh.php";
		
		$date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
               		
		$query = "select * from `member` ";
		$result = mysqli_query($conn,$query)or die("select error");
		while($rec = mysqli_fetch_array($result))
		{
			$mno = $rec["member_id"];
			if(isset($_POST[$mno]))
			{
				$query1 = "INSERT INTO  `attendance`(`member_id` ,  `date` ,  `attendance`) VALUES('$mno','$date','1')";
			}
			else
			{
				$query1 = "INSERT INTO  `attendance`(`member_id` ,  `date` ,  `attendance`) VALUES('$mno','$date','0')";
			}
			mysqli_query($conn,$query1)or die("insert".$mno);
			print "<script>";
			print "alert('Attendance get successfully....');";
			print "self.location='getattendance.php';";
			print "</script>";
		}
		
		
			
		
	}
	else
	{
		header("Location:index.php");
	}
?>

