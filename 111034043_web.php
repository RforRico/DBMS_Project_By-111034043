<!DOCTYPE html>
<html>
<title>
    About this Web
</title>
<body>
    <div class="container">
        <ul class="header_ul">
            <li class="header_li"><a href=''>Home</a></li>
            <li class="header_li"><a href="111034043_product.php">List</a></li>
        </ul>
        <header class="header">
            <h1>Merchandise to Sale</h1>
            <p>Find things you like</p>
        </header>
        <h2>【品味潮流，尋覓獨特】</h2>
        <p>歡迎蒞臨我們獨特的販賣點心與文創商品商店，這裡不僅僅是一個購物的地方，更是一個展示創意與品味的聚集地。無論你是追求美味小吃的美食家，還是尋找獨特禮品的探索者，我們都能滿足你的需求。</p>
        <p>首先，讓我們帶你探索我們的點心天地。進入店內，你將被迷人的香味所吸引，這裡擺滿了各式各樣的點心，從傳統的糕點到創意的甜點，應有盡有。無論是口感濃郁的巧克力蛋糕，還是香甜可口的酥餅，
        都將讓你流連忘返。我們堅持使用新鮮的食材，精心製作每一道點心，以確保品質和美味。</p>    
        <p>除了點心，我們的店內還擺放著各種獨特的文創商品。這些商品來自於本地藝術家和設計師的巧思，每一件都是獨一無二的。從手工製作的文具，到時尚的配飾，再到別具匠心的家居飾品，我們的文創商品
        將為你的生活增添一絲獨特的風采。</p>
        <p>不僅如此，我們的店內經常舉辦各種活動和工作坊，讓顧客能夠親自體驗點心製作和文創設計的樂趣。這不僅是一個購物的場所，更是一個與創意互動的空間，讓人充滿了靈感和愉悅。</p>   
        <p>無論是品嚐美味的點心，還是尋找獨特的文創商品，我們的販賣點心與文創商品商店都將成為你的最佳選擇。歡迎您的光臨，讓我們一同探索美食與創意的奇妙世界！</p>        
        <h3>【價格篩選器】</h3>
        <input type="number" id="minPrice" placeholder="最低價格">
        <input type="number" id="maxPrice" placeholder="最高價格">
        <button onclick="filterProducts()">篩選</button>
        <br>        
        <div id="products">
            <div class="product" data-price="150">Spring Style ring - $150</div>
            <div class="product" data-price="250">Autumn Style Bracelet and Hair clip - $250</div>
            <div class="product" data-price="100">Fruit chocolate mousse - $100</div>
            <div class="product" data-price="100">Pudding chocolate snowflake ice - $100</div>
            <div class="product" data-price="120">Tiramisu - $120</div>
            <div class="product" data-price="80">Brie set - $80</div>
            <div class="product" data-price="60">Danzi noodles - $60</div>
            <div class="product" data-price="60">Crepe - $60</div>
            <div class="product" data-price="90">Cappuccino - $90</div>
            <div class="product" data-price="120">Cheese cake - $120</div>
            <div class="product" data-price="130">Ponkan tiramisu - $130</div>
            <div class="product" data-price="60">Tangerine pudding - $60</div>
        </div>
        <br>               
        <div class="row">
            <div class="left" style="background-color:aqua;">
                <h2> Menu</h2>
                <input type="text" id ="mySearch" onkeyup ="myFunction()" placeholder="Search..." title="Type in a category">
                <ul id="myMenu">
                    <li><a herf="#" onmouseover="open_function(event,'Spring Style ring')">Spring Style ring</a></li>
                    <li><a herf="#" onmouseover="open_function(event,'Autumn Style Bracelet and Hair clip')">Autumn Style Bracelet and Hair clip</a></li>
                    <li><a herf="#" onmouseover="open_function(event,'Fruit chocolate mousse')">Fruit chocolate mousse</a></li>
                    <li><a herf="#" onmouseover="open_function(event,'Pudding chocolate snowflake ice')">Pudding chocolate snowflake ice</a></li>
                    <li><a herf="#" onmouseover="open_function(event,'Tiramisu')">Tiramisu</a></li>
                    <li><a herf="#" onmouseover="open_function(event,'Brie set')">Brie set</a></li>
                    <li><a herf="#" onmouseover="open_function(event,'Danzi noodles')">Danzi noodles</a></li>
                    <li><a herf="#" onmouseover="open_function(event,'Crepe')">Crepe</a></li>
                    <li><a herf="#" onmouseover="open_function(event,'Cappuccino')">Cappuccino</a></li>
                    <li><a herf="#" onmouseover="open_function(event,'Cheese cake')">Cheese cake</a></li>
                    <li><a herf="#" onmouseover="open_function(event,'Ponkan tiramisu')">Ponkan tiramisu</a></li>
                    <li><a herf="#" onmouseover="open_function(event,'Tangerine pudding')">Tangerine pudding</a></li>
                </ul>
            </div>
            <div class ="right" style="background-color: aliceblue;">
                <div id="Spring Style ring" class="tabcontent">
                    <h3>Spring Style ring</h3>
                    <table border="1" cellpadding="5" cellspacing="1";">
                        <tbody><tr>
                        <td><img alt="" src="pic/pic_1 .jpg" width="500px" height="350px"><h3>NTD 150</h3></td>
                        </tr></tbody>
                    </table>
                </div>
                <div id="Autumn Style Bracelet and Hair clip" class="tabcontent">
                    <h3>Autumn Style Bracelet and Hair clip</h3>
                    <table border="1" cellpadding="5" cellspacing="1";">
                        <tbody><tr>
                        <td><img alt="" src="pic/pic_2.jpg" width="500px" height="350px"><h3>NTD 250</h3></td>
                        </tr></tbody>
                    </table>
                </div>
                <div id="Fruit chocolate mousse" class="tabcontent">
                    <h3>Fruit chocolate mousse</h3>
                    <table border="1" cellpadding="5" cellspacing="1";">
                        <tbody><tr>
                        <td><img alt="" src="pic/水果巧克力慕斯.jpg" width="500px" height="350px"><h3>NTD 100</h3></td>
                        </tr></tbody>
                    </table>
                </div>
                <div id="Pudding chocolate snowflake ice" class="tabcontent">
                    <h3>Pudding chocolate snowflake ice</h3>
                    <table border="1" cellpadding="5" cellspacing="1";">
                        <tbody><tr>
                        <td><img alt="" src="pic/布丁巧克力雪花冰.jpg" width="500px" height="350px"><h3>NTD 100</h3></td>
                        </tr></tbody>
                    </table>
                </div>
                <div id="Tiramisu" class="tabcontent">
                    <h3>Tiramisu</h3>
                    <table border="1" cellpadding="5" cellspacing="1";">
                        <tbody><tr>
                        <td><img alt="" src="pic/提拉米蘇.jpg" width="500px" height="350px"><h3>NTD 120</h3></td>
                        </tr></tbody>
                    </table>
                </div>
                <div id="Brie set" class="tabcontent">
                    <h3>Brie set</h3>
                    <table border="1" cellpadding="5" cellspacing="1";">
                        <tbody><tr>
                        <td><img alt="" src="pic/布雷套餐.jpg" width="500px" height="350px"><h3>NTD 80</h3></td>
                        </tr></tbody>
                    </table>
                </div>
                <div id="Danzi noodles" class="tabcontent">
                    <h3>Danzi noodles</h3>
                    <table border="1" cellpadding="5" cellspacing="1";">
                        <tbody><tr>
                        <td><img alt="" src="pic/擔仔麵.jpg" width="500px" height="350px"><h3>NTD 60</h3></td>
                        </tr></tbody>
                    </table>
                </div>
                <div id="Crepe" class="tabcontent">
                    <h3>Crepe</h3>
                    <table border="1" cellpadding="5" cellspacing="1";">
                        <tbody><tr>
                        <td><img alt="" src="pic/可麗餅.jpg" width="500px" height="350px"><h3>NTD 60</h3></td>
                        </tr></tbody>
                    </table>
                </div>
                <div id="Cappuccino" class="tabcontent">
                    <h3>Cappuccino</h3>
                    <table border="1" cellpadding="5" cellspacing="1";">
                        <tbody><tr>
                        <td><img alt="" src="pic/卡布奇諾.jpg" width="500px" height="350px"><h3>NTD 90</h3></td>
                        </tr></tbody>
                    </table>
                </div>
                <div id="Cheese cake" class="tabcontent">
                    <h3>Cheese cake</h3>
                    <table border="1" cellpadding="5" cellspacing="1";">
                        <tbody><tr>
                        <td><img alt="" src="pic/起司蛋糕.jpg" width="500px" height="350px"><h3>NTD 120</h3></td>
                        </tr></tbody>
                    </table>
                </div>
                <div id="Ponkan tiramisu" class="tabcontent">
                    <h3>Ponkan tiramisu</h3>
                    <table border="1" cellpadding="5" cellspacing="1";">
                        <tbody><tr>
                        <td><img alt="" src="pic/椪糖提拉米蘇.jpg" width="500px" height="350px"><h3>NTD 130</h3></td>
                        </tr></tbody>
                    </table>
                </div>
                <div id="Tangerine pudding" class="tabcontent">
                    <h3>Tangerine pudding</h3>
                    <table border="1" cellpadding="5" cellspacing="1";">
                        <tbody><tr>
                        <td><img alt="" src="pic/橘子布丁.jpg" width="500px" height="350px"><h3>NTD 60</h3></td>
                        </tr></tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--login會員登入-->
        <h3>【會員登入】</h3>
        <form method="post" action="111034043_member_login.php">
        帳號：<input type="text" name="username"><br/><br/>
        密碼：<input type="password" name="password"><br><br>
        <input type="submit" value="登入" name="submit">
        <a href="111034043_member_register.php">還沒有帳號？現在就註冊！</a>
        </form>
        <br>  
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    </div>
    
</body>
</html>
<style>
    
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    * {
        box-sizing: border-box;
    }
    .row{
        display: flex;
    }
    .left{
        flex:30%;
        padding: 15px 0;
    }
    .left h2{
        padding-left: 8px;
    }
    .right{
        flex:70%;
        padding: 15%;
    }
    #mySearch{
        width: 100%;
        font-size: 18px;
        padding: 11px;
        border:1px solid aquamarine;
    }
    #myMenu{
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    #myMenu li a{
        padding: 12px;
        text-decoration: none;
        color: black;
        display: block;
    }
    #myMenu li a:hover{
        background-color: bisque;
    }
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
    .tabcontent{
        float:left;
        padding:0px 12px;
        border:1px solid antiquewhite;
        width:70%;
        border-left:none;
        height: 300px;
        display: none;
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
<style>
    .container{
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    @media only screen and (max_width:600px) {
        .container{
            padding:0 10px;
        }
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
<script>
    function myFunction(){
        var input,filter,ul,li,a,i;
        input =document.getElementById("mySearch");
        filter =input.value.toUpperCase();
        ul=document.getElementById("myMenu");
        li=ul.getElementsByTagName("li");
        for(i=0;i<li.length;i++){
            a=li[i].getElementsByTagName("a")[0];
            if(a.innerHTML.toUpperCase().indexOf(filter)>-1){
                li[i].style.display="";
            }else{
                li[i].style.display="none";
            }
        }
    }
    function open_function(evt,Name){
        var i,tabcontent,tablinks;
        tabcontent=document.getElementsByClassName("tabcontent");
        for(i=0;i<tabcontent.length;i++){
            tabcontent[i].style.display="none";
        }
        tablinks=document.getElementsByClassName("tablinks");
        for(i=0;i<tablinks.length;i++){
            tablinks[i].className=tablinks[i].className.replace(" active","");
        }
        document.getElementById(Name).style.display="block";
        evt.currentTarget.className+=" active";
    }
    function filterProducts() {
    var minPrice = document.getElementById("minPrice").value;
    var maxPrice = document.getElementById("maxPrice").value;

    var products = document.getElementsByClassName("product");

    for (var i = 0; i < products.length; i++) {
        var price = parseInt(products[i].getAttribute("data-price"));
        if ((minPrice === "" || price >= parseInt(minPrice)) && (maxPrice === "" || price <= parseInt(maxPrice))) {
            products[i].style.display = "block";
        } else {
            products[i].style.display = "none";
        }
    }
    }
</script>


