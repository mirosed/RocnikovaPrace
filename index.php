<html>
<head>
	<meta charset="UTF-8">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<title>PHP a MYSQL</title>
</head>
<body>
    <br>
<?php
require_once "database.php";
database::connect();
database::select();
database::insertVlastnik();
database::insertVuz();
database::update();
?>
    <br>
</body>
</html>