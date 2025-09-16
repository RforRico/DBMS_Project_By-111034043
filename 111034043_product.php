<!DOCTYPE html>
<html>
<head>
    <title>Accessory to sale</title>
</head>

<body>
    <ul class="header_ul">
        <li class="header_li"><a href="111034043_web.php">Home</a></li>
    </ul>
    <header class="header">
        <h1>Food and Accessory to Sale</h1>
        <p><font size="4">C'est la plus belle aubaine que je t'aie rencontré. </font size></p>
    </header>
    <div class="frame_right">
        
        <table border="1" cellpadding="5" cellspacing="1";">
            <tbody><tr>
            <td><img alt="" src="pic/pic_1 .jpg" width="500px" height="350px"><h3>
            <?php 
            $server_name = 'localhost';
            $user_name = 'root';
            $password = 'mysql';
            $dbname='hw3';
            // Create connection
            $conn = new mysqli($server_name, $user_name, $password,$dbname);
            $sql = "SELECT product_name,price,amount FROM product_111034043 WHERE product_name='Spring Style ring'";
            $result = $conn -> query($sql);
            if ($conn->multi_query($sql)===TRUE) {
                while($row = $result->fetch_assoc()) {
                    echo "product name: " . $row["product_name"] . "<br>"."  price: " . $row["price"] ."<br>"."  amount: " . $row["amount"];
                }
            }
            $conn->close();
            ?>
            </h3></td> 
            <td><img alt="" src="pic/pic_2.jpg" width="500px" height="350px"><h3>
            <?php
            $server_name = 'localhost';
            $user_name = 'root';
            $password = 'mysql';
            $dbname='hw3';
            // Create connection
            $conn = new mysqli($server_name, $user_name, $password,$dbname);
            $sqlm = "SELECT product_name,price,amount FROM product_111034043 WHERE product_name='Autumn Style Bracelet and Hair clip'";
            $resultm = $conn -> query($sqlm);
            if ($conn->multi_query($sqlm)===TRUE) {
                while($row = $resultm->fetch_assoc()) {
                    echo "product name: " . $row["product_name"] . "<br>"."  price: " . $row["price"] ."<br>"."  amount: " . $row["amount"];
                }
            }
            $conn->close();
            ?>
            </h3></td>
            </tr></tbody>
        </table>
        <table border="1" cellpadding="5" cellspacing="1";">
            <tbody><tr>
            <td><img alt="" src="pic/水果巧克力慕斯.jpg" width="500px" height="350px"><h3><?php
            $server_name = 'localhost';
            $user_name = 'root';
            $password = 'mysql';
            $dbname='hw3';
            // Create connection
            $conn = new mysqli($server_name, $user_name, $password,$dbname);
            $sql = "SELECT product_name,price,amount FROM product_111034043 WHERE product_name='Fruit chocolate mousse'";
            $result = $conn -> query($sql);
            if ($conn->multi_query($sql)===TRUE) {
                while($row = $result->fetch_assoc()) {
                    echo "product name: " . $row["product_name"] . "<br>"."  price: " . $row["price"] ."<br>"."  amount: " . $row["amount"];
                }
            }$conn->close();
            ?></h3></td>
            <td><img alt="" src="pic/布丁巧克力雪花冰.jpg" width="500px" height="350px"><h3><?php
            $server_name = 'localhost';
            $user_name = 'root';
            $password = 'mysql';
            $dbname='hw3';
            // Create connection
            $conn = new mysqli($server_name, $user_name, $password,$dbname);
            $sql = "SELECT product_name,price,amount FROM product_111034043 WHERE product_name='Pudding chocolate snowflake ice'";
            $result = $conn -> query($sql);
            if ($conn->multi_query($sql)===TRUE) {
                while($row = $result->fetch_assoc()) {
                    echo "product name: " . $row["product_name"] . "<br>"."  price: " . $row["price"] ."<br>"."  amount: " . $row["amount"];
                }
            }$conn->close();
            ?></h3></td>
            </tr></tbody>
        </table>
        <table border="1" cellpadding="5" cellspacing="1";">
            <tbody><tr>
            <td><img alt="" src="pic/提拉米蘇.jpg" width="500px" height="350px"><h3><?php
            $server_name = 'localhost';
            $user_name = 'root';
            $password = 'mysql';
            $dbname='hw3';
            // Create connection
            $conn = new mysqli($server_name, $user_name, $password,$dbname);
            $sql = "SELECT product_name,price,amount FROM product_111034043 WHERE product_name='Tiramisu'";
            $result = $conn -> query($sql);
            if ($conn->multi_query($sql)===TRUE) {
                while($row = $result->fetch_assoc()) {
                    echo "product name: " . $row["product_name"] . "<br>"."  price: " . $row["price"] ."<br>"."  amount: " . $row["amount"];
                }
            }$conn->close();
            ?></h3></td>
            <td><img alt="" src="pic/布雷套餐.jpg" width="500px" height="350px"><h3><?php
            $server_name = 'localhost';
            $user_name = 'root';
            $password = 'mysql';
            $dbname='hw3';
            // Create connection
            $conn = new mysqli($server_name, $user_name, $password,$dbname);
            $sql = "SELECT product_name,price,amount FROM product_111034043 WHERE product_name='Brie set'";
            $result = $conn -> query($sql);
            if ($conn->multi_query($sql)===TRUE) {
                while($row = $result->fetch_assoc()) {
                    echo "product name: " . $row["product_name"] . "<br>"."  price: " . $row["price"] ."<br>"."  amount: " . $row["amount"];
                }
            }$conn->close();
            ?></h3></td>
            </tr></tbody>
        </table>
        <table border="1" cellpadding="5" cellspacing="1";">
            <tbody><tr>
            <td><img alt="" src="pic/擔仔麵.jpg" width="500px" height="350px"><h3><?php
            $server_name = 'localhost';
            $user_name = 'root';
            $password = 'mysql';
            $dbname='hw3';
            // Create connection
            $conn = new mysqli($server_name, $user_name, $password,$dbname);
            $sql = "SELECT product_name,price,amount FROM product_111034043 WHERE product_name='Danzi noodles'";
            $result = $conn -> query($sql);
            if ($conn->multi_query($sql)===TRUE) {
                while($row = $result->fetch_assoc()) {
                    echo "product name: " . $row["product_name"] . "<br>"."  price: " . $row["price"] ."<br>"."  amount: " . $row["amount"];
                }
            }$conn->close();
            ?></h3></td>
            <td><img alt="" src="pic/可麗餅.jpg" width="500px" height="350px"><h3><?php
            $server_name = 'localhost';
            $user_name = 'root';
            $password = 'mysql';
            $dbname='hw3';
            // Create connection
            $conn = new mysqli($server_name, $user_name, $password,$dbname);
            $sql = "SELECT product_name,price,amount FROM product_111034043 WHERE product_name='Crepe'";
            $result = $conn -> query($sql);
            if ($conn->multi_query($sql)===TRUE) {
                while($row = $result->fetch_assoc()) {
                    echo "product name: " . $row["product_name"] . "<br>"."  price: " . $row["price"] ."<br>"."  amount: " . $row["amount"];
                }
            }$conn->close();
            ?></h3></td>
            </tr></tbody>
        </table>
        <table border="1" cellpadding="5" cellspacing="1";">
            <tbody><tr>
            <td><img alt="" src="pic/卡布奇諾.jpg" width="500px" height="350px"><h3><?php
            $server_name = 'localhost';
            $user_name = 'root';
            $password = 'mysql';
            $dbname='hw3';
            // Create connection
            $conn = new mysqli($server_name, $user_name, $password,$dbname);
            $sql = "SELECT product_name,price,amount FROM product_111034043 WHERE product_name='Cappuccino'";
            $result = $conn -> query($sql);
            if ($conn->multi_query($sql)===TRUE) {
                while($row = $result->fetch_assoc()) {
                    echo "product name: " . $row["product_name"] . "<br>"."  price: " . $row["price"] ."<br>"."  amount: " . $row["amount"];
                }
            }$conn->close();
            ?></h3></td>
            <td><img alt="" src="pic/起司蛋糕.jpg" width="500px" height="350px"><h3><?php
            $server_name = 'localhost';
            $user_name = 'root';
            $password = 'mysql';
            $dbname='hw3';
            // Create connection
            $conn = new mysqli($server_name, $user_name, $password,$dbname);
            $sql = "SELECT product_name,price,amount FROM product_111034043 WHERE product_name='Cheese cake'";
            $result = $conn -> query($sql);
            if ($conn->multi_query($sql)===TRUE) {
                while($row = $result->fetch_assoc()) {
                    echo "product name: " . $row["product_name"] . "<br>"."  price: " . $row["price"] ."<br>"."  amount: " . $row["amount"];
                }
            }$conn->close();
            ?></h3></td>
            </tr></tbody>
        </table>
        <table border="1" cellpadding="5" cellspacing="1";">
            <tbody><tr>
            <td><img alt="" src="pic/椪糖提拉米蘇.jpg" width="500px" height="350px"><h3><?php
            $server_name = 'localhost';
            $user_name = 'root';
            $password = 'mysql';
            $dbname='hw3';
            // Create connection
            $conn = new mysqli($server_name, $user_name, $password,$dbname);
            $sql = "SELECT product_name,price,amount FROM product_111034043 WHERE product_name='Ponkan tiramisu'";
            $result = $conn -> query($sql);
            if ($conn->multi_query($sql)===TRUE) {
                while($row = $result->fetch_assoc()) {
                    echo "product name: " . $row["product_name"] . "<br>"."  price: " . $row["price"] ."<br>"."  amount: " . $row["amount"];
                }
            }$conn->close();
            ?></h3></td>
            <td><img alt="" src="pic/橘子布丁.jpg" width="500px" height="350px"><h3><?php
            $server_name = 'localhost';
            $user_name = 'root';
            $password = 'mysql';
            $dbname='hw3';
            // Create connection
            $conn = new mysqli($server_name, $user_name, $password,$dbname);
            $sql = "SELECT product_name,price,amount FROM product_111034043 WHERE product_name='Tangerine pudding'";
            $result = $conn -> query($sql);
            if ($conn->multi_query($sql)===TRUE) {
                while($row = $result->fetch_assoc()) {
                    echo "product name: " . $row["product_name"] . "<br>"."  price: " . $row["price"] ."<br>"."  amount: " . $row["amount"];
                }
            }$conn->close();
            ?></h3></td>
            </tr></tbody>
        </table>
    </div>
    
    <div>
        <footer class="footer">
            &copy2024 by Tsai Kun-Hsien <br><br>contact us:
            super20040624@gmail.com
        </footer>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

</body>
</html>
<style>
    .header_ul {
        display: flex;
        margin: 0;
        padding: 0;
        top: 0;
        width: 100%;
        background-color: rgb(192, 192, 192);
    }
    .header_li {
        list-style-type: none;
        display: flex;
    }
    .header_li a {
        display: block;
        color: rgb(0, 0, 0);
        text-align: center;
        padding: 10px 10px;
        width: 100px;
    }
    .header_li a:hover {
        background-color: cadetblue;
    }
    .header {
        text-align: center;
        font-style: italic;
    }
    .frame_right{
        margin: 20px 20px 20px 100px;
    }
    
    .footer{
        background-color:cadetblue;
        text-align:center;
        bottom:10px;
    }
    html{
        scroll-behavior: smooth;
    }
    #myBtn{
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: black;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;

    }
</style>
<script>
    let mybutton=document.getElementById("myBtn");
    window.onscroll=function(){scrollFunction()};
    function scrollFunction(){
    if (document.body.scrollTop>20||document.documentElement.scrollTop>20){
        mybutton.style.display="block";
    }
    else{
        mybutton.style.display="none";
    }
    }
    function topFunction(){
    document.body.scrollTop=0;
    document.documentElement.scrollTop=0;
    }
</script>