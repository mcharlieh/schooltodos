<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Connection</title>
</head>

<body>
	
	<?php
		try {
			$conn = new PDO("sqlsrv:server = tcp:stododbserver.database.windows.net,1433; Database = stododb", "imhaley", "SkydiveTwinCities2017");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			print("Error connecting to SQL Server.");
			die(print_r($e));
		}
	?>
	
</body>
</html>