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
<html>
<head>
    <title>註冊</title>
</head>
<body>
    <h2>註冊新帳號</h2>
    <form action="111034043_member_register.php" method="POST">
        帳號：<input type="text" name="username"><br>
        密碼：<input type="password" name="password"><br>
        <input type="submit" value="註冊">
    </form>
</body>
</html>
<?php
$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

// 生成隨機的鹽值
$salt = bin2hex(random_bytes(16));

// 將鹽值和密碼結合，使用雜湊函數計算雜湊值
$hashedPassword = hash('sha256', $password . $salt);
$sql = "INSERT INTO member_111034043 (username, hashed_password, salt) VALUES ('$username', '$hashedPassword', '$salt')";
if ($conn->query($sql) === TRUE) {
    echo "註冊成功<br>";
} else {
    echo "註冊失敗:此帳號已存在或錯誤";
}
$conn->close();
?>
<html>
    <a href="111034043_web.php">前往網頁首頁</a>
    <a href="111034043_member_register.php">重新註冊</a>
</html>