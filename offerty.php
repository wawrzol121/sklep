

<html >
<head>
    <meta charset="utf-8" />
    <title>offers</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="baner"><h1>Lista Ofert</h1> </div>
<div class="Lista_ofert"> 
    

<?php
$con = new mysqli("localhost", "root", "", "shop");

       $sql= '"SELECT Subject , price , user_id FROM offers INNER JOIN user ON user.id=offers.user_id"';
         
    $res = $con->query("SELECT `Subject`, `user_id` FROM `offers` WHERE user_id=".$_COOKIE['user_id']);
    $row = $res->fetch_array();
    

    print_r($_GET);
    

?>
     </div>
</body>
</html>