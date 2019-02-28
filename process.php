<?php
include_once "class/class.conn.php";

$user = $_POST["user"];
$pwd = $_POST["pwd"];
$vUser = getUsers($user, $pwd);
if($vUser > 0)
{
	header("Location: search.php");
}
else
{

}
?>