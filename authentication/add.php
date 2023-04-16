<?php 
session_start();
?>
<html>
    <head>
        <title>Добавление записи</title>
        <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<?php require_once '../navigation.php'; ?>
    <h1>Добавление записи</h1>
<form method="POST" enctype="multipart/form-data" action="add.php">
    <p><input type="text" name="name" class="addpublic" placeholder="Имя публикации"></p>
    <textarea name="description" placeholder="Описание публикации"></textarea>
    <input name="filename" type="file" />
    <p><button type="submit" name="button" class="addbutton">Добавить запись</button></p>
</form>

<?php
session_start();
if(!$_SESSION['username']){
	header("Location: enter.php");
	exit;}
$loginname = $_SESSION['username'];
$date = date("Y-m-d"); //присвоено 12.03.15
$time= date("H:i:s"); //присвоит 1 элементу массива 18:32:17
$datetime = $date." ".$time;


if(isset($_POST['button'])) {

    $uploaddir = '/var/www/html/site/images/blosimage/';
    $uploadfile = $uploaddir . basename($_FILES['filename']['name']);
    if (move_uploaded_file($_FILES['filename']['tmp_name'], $uploadfile)) {
        
        $filename = $_FILES['filename']['name'];

      } else {
         echo "Ошибка загрузки";
      }

$description = $_POST['description'];
$name = $_POST['name'];
require_once '../connect.php';
$query = "INSERT INTO `blogs` (`id`, `nameblog`, `description`, `picture`, `datepub`, `avtor`) VALUES (NULL, '$name', '$description', '$filename', '$datetime', '$loginname')";
$result = $mysqli->query($query);
header("Location: ../index.php");
}

	?>

</body>
</html>
