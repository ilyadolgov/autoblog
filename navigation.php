<?php session_start();?>
  <div class="navigation">
      <p><a href="/site">Главная страница</a>
      <?php if(!$_SESSION['username']){
        echo "<a href='/site/authentication/enter.php'> | Выполнить вход / Регистрация | </a>";
      } ?>
      

      <?php if($_SESSION['username']){
        echo "<a href='/site/authentication/index.php'>| Панель администратора</a>
        | Добро пожаловать, ".$_SESSION['username'];
        echo "<a href='/site/authentication/logout.php'> | Выйти </a></p>";
      }
      ?>
      </div>
