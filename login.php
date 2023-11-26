<?php
require_once "config.php";

if (!isset($_POST['email'], $_POST['password'])) {
	exit('Please fill both the username and password fields!');
}
extract($_POST);

$sql = "SELECT * FROM users WHERE email = '{$email}' AND password = '" . $password . "'";
$result = $con->query($sql);
if (!$result) {
	echo $con->error;
}
if($result->num_rows) {
	echo "Script prone to injection";
	// injection will succeed if ran on this query
	// go to a new page
}
// fetch found record
//$row = $result->fetch_assoc();

?>