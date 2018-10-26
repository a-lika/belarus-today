<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style_admin.css">
  <title>Вход в администраторский блок</title>
</head>

<body>
  <header>
    <div class="logo">
      <a href="{LINK_SITE}">
        <img src="images/logo.png">
      </a>
      <h3>Belarus Today</h3>
      <br/>
      <h5>
        <span class="online">Online</span> - путеводитель по Беларуси</h5>
    </div>
  </header>
  <div class="container">
    <h2>Панель администратора</h2>
    <div class="login">Для того, чтобы приступить к работе с данными, необходимо авторизоваться</div>
    <form action="" method="POST" enctype="multipart/form-data" class="admin_form">
      <input type="text" class="input_text_entrance" name="Login" placeholder="Логин" required/>
      <input type="text" class="input_text_entrance" name="Password" placeholder="Пароль" required/>
      <input type="submit" class="contact_submit" name="Submit" value="Войти">
    </form>
  </div>
</body>

</html>