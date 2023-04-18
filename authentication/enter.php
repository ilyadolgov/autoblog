<html>
<head>
    <title>Авторизация/Регистрация</title>
    <link rel="stylesheet" href="../styles/style.css">
    <script src="../scripts/script.js"></script>
</head>
<?php require_once '../navigation.php'; ?>
<body class="bodyautorize">

    <div class="centerform">
<h1>Добро пожаловать123123!</h1>

<img src="../images/admin.png" class="logologin"><br>
<button onclick="login()" class="c-button-login">Авторизация</button>
<button onclick="registr()" class="c-button-registr">Регистрация</button>
<div id="formaauthentication">
<form method="post" class="forma">
    <p><input type="text" placeholder="Имя пользователя" name="name" class="username"></p>
    <p><input type="password" placeholder="Пароль" name="passwd" class="password"></p>
    <button type="submit" name="button" class="c-button-vhod">Войти</button>
</form><br>
</div>

<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/




if(isset($_POST['button'])) {
    session_start();
    $name=$_POST['name'];
    $passwd=$_POST['passwd'];


    $servername = "localhost";
    $username = "userdb";
    $password = "Vjkjrj123451";
    $database = "blog";

    $mysqli = new mysqli($servername, $username, $password, $database);
    $query = "SELECT * FROM `users` WHERE `name`='$name'";
    $result = $mysqli->query($query);

    $row = mysqli_fetch_array($result);
    //echo $row['passwd']; //Вывод пароля 

    if (password_verify($passwd,$row['passwd'])) {
        
        $_SESSION['username'] = $name;
        header("Location: /site/index.php");
    }
    else {
        echo "Неправильный логин или пароль!";
    }
    
}

?>
</div>
</body>
</html>