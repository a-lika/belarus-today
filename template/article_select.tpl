<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="js/jquery.js"></script>
  <script src="js/index.js"></script>
  <title>Блог о Беларуси</title>
</head>

<body>
  <header>
    <div class="slider">
      <img class="slider_img" src="images/papers.jpg" alt="" />
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
          <h2>ПОИСК ЗАПИСЕЙ</h2>
        </div>
      </div>
    </div>
  </header>
  <div class="sort">
    <a href="?id={ID}&sort=4">
      <span {CLASS_4}>Все рубрики<span>
    </a>
    <a href="?id={ID}&sort=1">
      <span {CLASS_1}>#События<span>
    </a>
    <a href="?id={ID}&sort=2">
      <span {CLASS_2}>#Места<span>
    </a>
    <a href="?id={ID}&sort=3">
      <span {CLASS_3}>#Люди<span>
    </a>
  </div>
  <div class="article_container">
    {ARTICLE_CARD}
  </div>
  {FOOTER}
</body>

</html>