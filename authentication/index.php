<?php
session_start();
 
if(!$_SESSION['username']){
	header("Location: enter.php");
	exit;
}
?>
<html>
	<head>
		<title>Панель администратора</title>
		<link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<?php require_once '../navigation.php'; ?>
	<h1>Панель администратора</h1>
	<form action="/site/authentication/add.php">
    <button type="submit" class="addbutton">Добавить публикацию</button>
</form>
<?php 
require_once '../connect.php';
$loginname = $_SESSION['username'];
$query = "SELECT * FROM `blogs` WHERE avtor='$loginname'";
$result = $mysqli->query($query);
echo "<table border='1' class='tableadminka'>";
echo "<thead><tr><th>id</th><th>Имя</th><th colspan='2'>Действие</th></tr></thead>";
while ($row=mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>".$row['id']."</td>"."<td>".$row['nameblog']."</td><td><a href=edit.php?id=".$row['id']."><img src='../images/editico.png' width='32px'></a></td><td>
	<a href=delete.php?id=".$row['id'].">
	<img src='../images/deleteico.png' width='32px'></a></td>";
	echo "</tr>";
}    
echo "</table>"; 
	?>
</body>
</html>
