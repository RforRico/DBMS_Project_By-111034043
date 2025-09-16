<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$server_name = 'localhost';
$user_name = 'root';
$password = 'mysql';
$dbname='hw3';
// Create connection
$conn = new mysqli($server_name, $user_name, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully. ";
}
echo "<br>";
?>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
unset($_SESSION['username']);
echo '登出中......';
echo '<meta http-equiv=REFRESH CONTENT=1;url=111034043_web.php>';
?>
