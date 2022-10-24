<?php
	$dsn = "mysql: host=localhost; dbname=asterisk";
	$username= 'cron';
	$password = 'vpwwnx6x';
	$options = [];

	try {
		$link = new PDO($dsn, $username, $password, $options);
		$link -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$link -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}

	catch(PDOException $e) {
		echo 'Error Connecting to the database ' . $e->getMesssage();
	}

?>
