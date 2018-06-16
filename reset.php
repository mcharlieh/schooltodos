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
		$secWord = (isset($_POST['secWord']) ?$_POST['secWord'] : '');
		$secNum = (isset($_POST['secNum']) ?$_POST['secNum'] : '');
		
		$sqlReset = "update tblUSERS set loginPass='$pass' where loginName='$user' and secureWord='$secWord' and secureNum='$secNum'";
		
		try {
			$conn->exec($sqlReset);
			echo("Password reset successful!");
			header('Location: index.html');
		}
		catch (PDOException $f) {
			echo $sql . "<br>" . $f->getMessage();
		}
	
		$conn = null;
	?>
	
</body>
</html>