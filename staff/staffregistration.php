<?php 

	include '../db.php';

	if (isset($_POST['reg_staff'])) {
		$name = $_POST[''];
		$department = $_POST[''];
		$checkNO = $_POST[''];
		$email = $_POST[''];
		$dob = $_POST[''];
		$doh = $_POST[''];

		$query = "INSERT INTO Staff(CheqNo,	Name, DateOfBirth, Email, DateOfHire, Department_DeptId)
		VALUES($CheqNo, $Name, $dob, $email, $doh, $department)";

		if ($conn->query($query)) {
			echo "staff registered succefull message";
		}else{
			echo "there was a problem with your registration";
		}
	}

?>