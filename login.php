<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
		include 'openConn.php';
	
		$user = (isset($_POST['user']) ?$_POST['user'] : '');
		$pass = (isset($_POST['pass']) ?$_POST['pass'] : '');
	
		$sqlLogon = "select id from tblUSERS where loginName='$user' and loginPass='$pass'";
	
		try {
			$conn->exec($sqlLogon);
			
			$q = $conn->query($sqlLogon);
			$userId = $q->fetchColumn();
			
			echo("Login successful!" .$userId);
			
			//header('Location: task.html');
		}
		catch (PDOException $f) {
			echo ("Invalid username or password. If you forgot your password, you can reset it using the button below.");
		}
	
		$conn = null;
	
	?>
	
</body>
</html>