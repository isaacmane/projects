<?php
$servername = "localhost";
$username = "admin";
$password = "VGG5jLmH5qrebZH";
$db = "youtube";

try {
		$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);		
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}
	
function getUsers($u, $p)
{	
	global $conn;
	$sql = "SELECT * FROM users WHERE user = '".addslashes($u)."'";

	$res = $conn->query($sql);
	$OBJ = $res->fetchAll(PDO::FETCH_ASSOC);
	$x = 0;
	foreach ($OBJ as $k => $v) 
	{
		$x++;
	}

	$valid = ($x > 0) ? '1' : '0';
	return $valid;
}

?>