<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="js/jquery.js"></script>
  <script src="js/index.js"></script>

  <title>{TYPE_NAME}</title>
</head>

<body>
  <header>
    <div class="slider">
      <img class="slider_img" src="images/{IMAGE}">
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
          <h2>{TYPE_NAME}</h2>
        </div>
        <div class="path">
          <p>Путеводитель >
            <a href="guide_type.php">По типам</a> > {TYPE_NAME}</p>
        </div>
      </div>
    </div>
  </header>

  <div class="sort">
    <a href="?id={ID}&sort=2">
      <span {CLASS_2}>По рейтингу
        <span>
    </a>
    <a href="?id={ID}&sort=1">
      <span {CLASS_1}>По названию
        <span>
    </a>
  </div>
  <div class="attraction_container">
    {ATTR_CARD}
  </div>
  {POPULAR_TRIP} {FOOTER}
</body>

</html>