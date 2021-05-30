<?php
	$conn = new mysqli('localhost', 'a3001598_payroll', 'payroll1234@', 'a3001598_payroll');
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
