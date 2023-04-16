<?php
session_start();
?>
<html>
    <head>
        <title>Учебный сайт</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
<body>
<header>
  <?php
  require_once 'navigation.php';
  ?>
    </header>
    <main>
      <section>
      <h1>Автомобильные блоги</h1>

<?php

require_once 'connect.php';
$query = "SELECT * FROM `blogs`";
$result = $mysqli->query($query);
//$row = mysqli_fetch_array($result);
while ($row=mysqli_fetch_array($result)) {
  echo "<div class='conteiner'><div class='namepublic'>".$row['nameblog']."</div><div class='image'>
  <img src='images/blosimage/".$row['picture']."' class='img'></div><div class='discription'>".$row['description']."</div>
  <a href='#' class='dalee'>Читать далее</a><div class='datepublic'>Дата публикации: ".$row['datepub']."</div>
  <div class='datepublic'>Автор: ".$row['avtor']."</div></div>";
}    
?>



      </section>
    </main>
    <footer>

    </footer>
</body>
</html>
