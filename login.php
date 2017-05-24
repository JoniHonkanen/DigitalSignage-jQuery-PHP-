<?php
    session_start();
 
    if(isset($_POST['login'])) {
        include_once("./php/config.php");
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
 
        $username = stripslashes($username);
        $password = stripslashes($password);
       
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
 
 
        $sql = "SELECT * FROM admin WHERE username='$username'";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);
        $id = $row['id'];
        $db_password = $row['password'];
 
        if($password == $db_password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header("Location: index.php");
        } else {
          //  echo "Väärä käyttäjätunnus tai salasana! <br>";
            echo '<script language="javascript">';
            echo 'alert("Tarkista käyttäjätunnus sekä salasana")';
            echo '</script>';
            /*
            $asd="' $username' <br>";
            $qqq="'$sql' <br>";
            $www="'$db_password' <br>";
            $eee="'$password' <br>";
            */
        }
 
    }
?>
 
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body style="background-color: #2c3847" class="gradient">
    <div class="login">

    <h1 style="font-family: Tahoma; color:white;text-align: center;">KIRJAUDU</h1>
    <form action="login.php" method="post" enctype="multipart/form-data">

    <div class="input-group">
        <span class="input-group-addon logTeksti3"><i class="glyphicon glyphicon-user"></i></span>
        <input class="logTeksti1 form-control" placeholder="Username" name="username" type="text" autofocus>
    </div>

    <div class="input-group">
        <span class="input-group-addon logTeksti4"><i class="glyphicon glyphicon-lock"></i></span>
        <input class="logTeksti2 form-control" placeholder="Password" name="password" type="password">
    </div>

        <input class="logNappula" name="login" type="submit" value="Kirjaudu">
    </form>
    </div>
    <script>
    </script> 
</body>
</html>