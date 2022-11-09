<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<?php
$con = new mysqli("localhost", "root", "", "shop");

        $sql= 'SELECT * FROM mydb';

    $res = $con->query("SELECT id, login FROM account WHERE id=$id_user");
    $row = $res->fetch_all(MYSQLI_ASSOC);
    
   
     $sqlaccount = "SELECT id, name FROM account  WHERE id = ".$randlogin.";";
    if($resaccount = $con->query($sqlaccount)){
        while($rowaccount = $resaccount->fetch_assoc()){
            echo "<div class='account'>".$rowaccount["account"]."</div>";
            echo "<div style='clear: both;'></div>";
        }
    }

?>
</body>
</html>