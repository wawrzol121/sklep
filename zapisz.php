<html>
<head>
    <meta charset="UTF-8">
    <title>quiz</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<header>
<h3> Zapisz sie </h3>

</header>
    <body>
        <div class="blok1">
            <form method="post">
                
                <p>login<input type="text" name="login"></p><br>
                <p>password<input type="text" name="password"></p><br>
            <p>name<input type="text" name="name"></p><br>
        
       <?php 
$conn = mysqli_connect('localhost', 'root', '', 'shop' );


            if(isset($_POST['login'])){
                $login=$_POST['login'];
                $password=$_POST['password'];
                $name=$_POST['name'];

                $sql="INSERT INTO `user` (`id`, `login`, `password`, `name`) VALUES ('', '$login', '$password', '$name')"; 
                $result= $conn->query($sql);
                echo $result;
                header('location:login.php');
              
            }


                ?>
                <input type="submit" value="Zakończ">
        </form>
        
        </div>
    </body>
</html>