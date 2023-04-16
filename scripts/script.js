function login() {
    document.querySelector('#formaauthentication').innerHTML = `
    <form method="post" class="forma">
    <p><input type="text" placeholder="Имя пользователя" name="name" class="username"></p>
    <p><input type="password" placeholder="Пароль" name="passwd" class="password"></p>
    <button type="submit" name="button" class="c-button-vhod">Войти</button>
    </form><br>
    `;
  }
  function registr() {
    document.querySelector('#formaauthentication').innerHTML = `
    <form method="post" class="forma">
    <p><input type="text" placeholder="Имя пользователя" name="name" class="username"></p>
    <p><input type="password" placeholder="Пароль" name="passwd" class="password"></p>
    <p><input type="password" placeholder="Подтвердите пароль" name="passwd2" class="password"></p>
    <button type="submit" name="button" class="c-button-vhod">Зарегистрироваться</button>
</form><br>
    `;
  }