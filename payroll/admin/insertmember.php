<?php
	if(isset($_POST["btnsubmit"]))
	{
		extract($_POST);
		include "include/dbh.php";
		if($rec=mysqli_fetch_array(mysqli_query($conn,"SELECT member_id FROM `member` order by member_id desc limit 1")))
		{
			$bid =1+ $rec['member_id'];
		}
		$en = date("Y").$bid;
		
		$query = "INSERT INTO  `member`(`enrolment_no` ,  `name` ,  `mobile` ,  `email`) VALUES('$en','$name','$mobile','$email')";

		$q = mysqli_query($conn,$query)or die("insert error");
		
			print "<script>";
			print "alert('Member add successfully....');";
			print "self.location='index.php';";
			print "</script>";
		
	}
?>