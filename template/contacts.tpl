<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="js/jquery.js"></script>
  <script src="js/index.js"></script>
  <title>Контакты</title>
</head>

<body>
  <header>
    <div class="slider">
      <img class="slider_img" src="images/belarus_49.jpg" alt="" />
      <div class="header_container_secondary">
        {LOGO}
        <nav>
          <a id="touch-menu" class="mobile-menu" href="#">
            <i class="icon-reorder"></i>МЕНЮ</a>
          <ul class="menu">
            {MENU}
          </ul>
        </nav>
        <div class="title_secondary">
          <h2>КОНТАКТЫ</h2>
        </div>
      </div>
    </div>
  </header>
  <div class="contacts_container">
    <form action="application.php" method="POST" enctype="multipart/form-data" class="contacts_form">
      <h3>Заполните форму для связи:</h3>
      <div class="form_left">
        <p>Введите Ваше имя:</p>
        <input type="text" class="input_text" name="name" placeholder="Имя" required/>
        <p>Введите адрес электронного ящика:</p>
        <input type="email" class="input_text" name="email" placeholder="example@gmail.com" required/>
        <p>Введите номер телефона:</p>
        <input type="text" class="input_text" name="tel" pattern="\+([0-9]{1,3})(\([0-9]{2}\))([0-9]{7})" placeholder="+375(29)xxxxxxx"
          title="+375(29)xxxxxxx" />
        <p>Введите текст письма:</p>
        <textarea required /></textarea>
      </div>
      <input type="submit" class="contact_submit" value="Отправить">
    </form>
  </div>
  {FOOTER}
</body>

</html>