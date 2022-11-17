

<html >
<head>
    <meta charset="utf-8" />
    <title>offers</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="baner">
    <h1>Lista Ofert</h1>
    <br>
    <a href="add.php"><input type="submit" value="Dodaj ogłoszenie" > </a> 
    </div>
    
<div class="Lista_ofert"> 
    

<?php
$conn = new mysqli("localhost", "root", "", "shop");

       $sql= '"SELECT id_offers ,Subject , price , user_id FROM offers AS i JOIN user ON id=offers.user_id"';
         
    $res = $conn->query("SELECT `id_offers`,`Subject`,`price`, `user_id` ,`name` FROM `offers`");
    $offers = $res->fetch_all(MYSQLI_ASSOC);
    for($i = 0; $i<count($offers); $i++){
        echo"<h3>id_offers = ".$offers[$i]["id_offers"]."</h3>";
        echo"<h3>Subject =".$offers[$i]["Subject"]."</h3>";
        echo"<h3>price =".$offers[$i]["price"]."</h3>";
        echo"<h3>user_id =".$offers[$i]["user_id"]."</h3>";
        echo"<h3>name = ".$offers[$i]["name"]."</h3>";
    }

    

?>
     </div>
</body>
</html>
