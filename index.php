<?php
$uri = $_SERVER['REQUEST_URI'];
if($uri == '/youtube/')
{
	//header("Location: login.php");
	include_once "login.php";
}

// URL
// https://www.googleapis.com/youtube/v3/search?part=snippet&q=sailing&key=AIzaSyChZiMWemLfvXQ9FSObHaOb2E2gu_cVw10
?>