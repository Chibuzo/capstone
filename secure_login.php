<?php
require_once "config.php";

if (!isset($_POST['email'], $_POST['password'])) {
	exit('Please fill both the username and password fields!');
}
extract($_POST);

$sql = "SELECT * FROM users WHERE email =? AND password =?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();
if(!$result->num_rows) {
	// injection was prevented!
}

?>