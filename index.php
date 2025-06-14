<?php
// login.php (your login_url endpoint)

$success_url = $_POST['success_url'] ?? '';
$username    = $_POST['username'] ?? '';
$password    = $_POST['password'] ?? '';

// Use the variables as needed
echo "Success URL: $success_url<br>";
echo "Username: $username<br>";
echo "Password: $password<br>";
?>
