<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="js/jquery.js"></script>
  <script src="js/index.js"></script>

  <title>Полезные ссылки</title>
  <meta name="description" content="Полезные ссылки и сервисы Беларуси, фотографии Минска в 360 градусов, виртуальная реальность, официальный сайт Беларуси">
  <meta name="keywords" content="{KEYWORDS}">
</head>

<body>
  <header>
    <div class="slider">
      <img class="slider_img" src="images/belarus_561.jpg" alt="" />
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
          <h2>ССЫЛКИ</h2>
        </div>
      </div>
    </div>
  </header>

  <div class="helpful_container">
    {LINKS}
  </div>

  {POPULAR_TRIP} {FOOTER}
</body>

</html>