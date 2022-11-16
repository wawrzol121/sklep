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
    <div class="blok1"><p>login <input type="text"></p>
<p>hasło <input type="text"></p>
        
    <?php
$con = new mysqli("localhost", "root", "", "shop");

        $sql= 'SELECT  user FROM shop';
         
    $res = $con->query("SELECT `id`, `login`, `password` FROM `user` WHERE id=1");
    $row = $res->fetch_all(MYSQLI_ASSOC);
    
   
   if(isset($_POST["login"])){
    $sql= "SELECT * FROM user WHERE login='".$_POST['login']."' AND password='".$POST['password']."'";
    setcookie('id');
   }
   if (isset($_COOKIE["c"])){
       "SELECT * FROM offers INNER JOIN user ON user.userID=offers.offersID";
        }
    

?>
   <button type="submit">Zaloguj<a href="offerty.php"></a></button>  
    </div>
    <div class="blok2"></div>
    <div class="blok3"> <button ><a href="zapisz.html">zapisz się</a></button>
    </div>
    
    
    </body>
</html>
