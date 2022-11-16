<html>
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<header>
<h3> Logowanie</h3>

</header>
<body>
    <form method="post">
        <div class="blok1">
            <p>login <input type="text" name="login"></p>
            <p>hasło <input type="text" name="password"></p>
    
         <?php
        $con = new mysqli("localhost", "root", "", "shop");

             if(isset($_POST["login"])){
            $sql= "SELECT * FROM user WHERE login='".$_POST['login']."' AND password='".$_POST['password']."'";
            $res = $con->query($sql);
            $row = $res->fetch_array();
            if(count($row)>0){
                setcookie("user_id",$row["id"]);
                header('location:offerty.php');
                }
                }

          

                


        ?>
        
   
        <input type="submit" value="Zaloguj">
    </div>
    </form>
    <div class="blok2"><button type="button"><a href="zapisz.php">Zapisz się</a></button></div>
   
    
   
    
    
    </body>
</html>