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
$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

$sql = "SELECT hashed_password, salt FROM member_111034043 WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $storedHashedPassword = $row['hashed_password'];
    $salt = $row['salt'];

    // 使用輸入的密碼和鹽值計算雜湊值
    $hashedLoginPassword = hash('sha256', $password . $salt);

    // 比對計算的雜湊值和儲存的雜湊值
    if ($hashedLoginPassword === $storedHashedPassword) {
        echo "登入成功";
        echo "<br>";
        echo '<a href="111034043_member_logout.php">登出</a><br><br>';
    } else {
        echo "登入失敗：密碼錯誤";
    }
} else {
    echo "登入失敗：帳號不存在";
}
$conn->close();
?>
<html>
    <a href="111034043_web.php">前往網頁首頁</a>
    <a href="111034043_member_register.php">重新註冊</a>
</html>