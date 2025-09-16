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
$sql ="CREATE TABLE member_111034043 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    hashed_password VARCHAR(255) NOT NULL,
    salt VARCHAR(255) NOT NULL
)";
if ($conn ->query($sql)===TRUE) {
    echo "Table member_111034043 created successfully. <br>";
} else {
    echo "Error creating table: " . $conn->error;
    echo "<br>";
}
$sql ="CREATE TABLE product_111034043 (
    product_name VARCHAR(255) UNIQUE,
    price INT NOT NULL,
    amount INT NOT NULL
)";
if ($conn ->query($sql)===TRUE) {
    echo "Table product_111034043 created successfully. <br>";
} else {
    echo "Error creating table: " . $conn->error;
    echo "<br>";
}
$sql = "INSERT INTO product_111034043 (product_name,price,amount)
VALUES ('Spring Style ring',150,5);";
if($conn->multi_query($sql)===TRUE){
    echo"New record created successfully. ";
    echo"<br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<br>";
}
$sql = "INSERT INTO product_111034043 (product_name,price,amount)
VALUES ('Autumn Style Bracelet and Hair clip',250,4);";
if($conn->multi_query($sql)===TRUE){
    echo"New record created successfully. ";
    echo"<br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<br>";
}
$sql = "INSERT INTO product_111034043 (product_name,price,amount)
VALUES ('Fruit chocolate mousse',100,2);";
if($conn->multi_query($sql)===TRUE){
    echo"New record created successfully. ";
    echo"<br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<br>";
}
$sql = "INSERT INTO product_111034043 (product_name,price,amount)
VALUES ('Pudding chocolate snowflake ice',100,6);";
if($conn->multi_query($sql)===TRUE){
    echo"New record created successfully. ";
    echo"<br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<br>";
}
$sql = "INSERT INTO product_111034043 (product_name,price,amount)
VALUES ('Tiramisu',120,5);";
if($conn->multi_query($sql)===TRUE){
    echo"New record created successfully. ";
    echo"<br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<br>";
}
$sql = "INSERT INTO product_111034043 (product_name,price,amount)
VALUES ('Brie set',80,6);";
if($conn->multi_query($sql)===TRUE){
    echo"New record created successfully. ";
    echo"<br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<br>";
}
$sql = "INSERT INTO product_111034043 (product_name,price,amount)
VALUES ('Danzi noodles',60,6);";
if($conn->multi_query($sql)===TRUE){
    echo"New record created successfully. ";
    echo"<br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<br>";
}
$sql = "INSERT INTO product_111034043 (product_name,price,amount)
VALUES ('Crepe',60,4);";
if($conn->multi_query($sql)===TRUE){
    echo"New record created successfully. ";
    echo"<br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<br>";
}
$sql = "INSERT INTO product_111034043 (product_name,price,amount)
VALUES ('Cappuccino',90,10);";
if($conn->multi_query($sql)===TRUE){
    echo"New record created successfully. ";
    echo"<br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<br>";
}
$sql = "INSERT INTO product_111034043 (product_name,price,amount)
VALUES ('Cheese cake',120,6);";
if($conn->multi_query($sql)===TRUE){
    echo"New record created successfully. ";
    echo"<br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<br>";
}
$sql = "INSERT INTO product_111034043 (product_name,price,amount)
VALUES ('Ponkan tiramisu',130,6);";
if($conn->multi_query($sql)===TRUE){
    echo"New record created successfully. ";
    echo"<br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<br>";
}
$sql = "INSERT INTO product_111034043 (product_name,price,amount)
VALUES ('Tangerine pudding',60,7);";
if($conn->multi_query($sql)===TRUE){
    echo"New record created successfully. ";
    echo"<br>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<br>";
}
?>
