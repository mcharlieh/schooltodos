<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration</title>
</head>

<body>
	
	<?php
		include 'openConn.php';
	
		$fname = (isset($_POST['fname']) ?$_POST['fname'] : '');
		$lname = (isset($_POST['lname']) ?$_POST['lname'] : '');
		$school = (isset($_POST['school']) ?$_POST['school'] : '');
		$degree = (isset($_POST['degree']) ?$_POST['degree'] : '');
		$user = (isset($_POST['user']) ?$_POST['user'] : '');
		$pass = (isset($_POST['pass']) ?$_POST['pass'] : '');
		$secWord = (isset($_POST['secWord']) ?$_POST['secWord'] : '');
		$secNum = (isset($_POST['secNum']) ?$_POST['secNum'] : '');
	
		$sqlCreateUser = "insert into tblUSERS (loginName, loginPass, securityWord, securityNum) VALUES ($user, $pass, $secWord, $secNum)";
		$sqlCreateProfile = "insert into tblPROFILE (usersId, firstName, lastName, schoolName, degreeName) VALUES ($last_id, $fname, $lname, $school, $degree)";
	
		try {
			$conn->exec($sqlCreateUser);
			$last_id = $conn->lastInsertId();
			$conn->exec($sqlCreateProfile);
			echo("Registration successful!");
		}
		catch (PDOException $f) {
			echo $sql . "<br>" . $f->getMessage();
		}
	
		$conn = null;
	
	?>
	
</body>
</html>