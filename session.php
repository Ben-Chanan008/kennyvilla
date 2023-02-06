<?php
require 'database.php';

session_start();

$user = NULL;
$user_id = NULL;

if (isset($_SESSION['kennyvilla'])) {
	$user_id = $_SESSION['kennyvilla'];
	
	$q = $conn->query("SELECT * FROM `user` WHERE `id` = '$user_id'");
	
	if ($q->num_rows)
		$user = $q->fetch_object();
}
