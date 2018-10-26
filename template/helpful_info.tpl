<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="js/jquery.js"></script>
  <script src="js/index.js"></script>
  <title>{TITLE}</title>
  <meta name="description" content="{DESCRIPTION}">
  <meta name="keywords" content="{KEYWORDS}">
</head>

<body>
  <header>
    <div class="slider">
      <img class="slider_img" src="images/belarus_41.jpg" alt="" />
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
          <h2>ИНФОРМАЦИЯ ДЛЯ ТУРИСТОВ</h2>
        </div>
      </div>
    </div>
  </header>

  <div class="helpful_container">
    <div class="helpful_content">
      <h3>{NAME}</h3>
      {TEXT}
    </div>
    <div class="helpful_nav">
      <ul class="helpful_navigation">
        {HELPFUL_MENU}
      </ul>
    </div>
  </div>
  {FOOTER}
</body>

</html>