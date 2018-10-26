<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>{TITLE}</title>
  <meta name="description" content="{DESCRIPTION}">
  <meta name="keywords" content="{KEYWORDS}">
  <script src="js/jquery.js"></script>
  <script src="js/scrollBarActive.js"></script>
  <script src="js/index.js"></script>
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
          <h2>{NAME}</h2>
        </div>
      </div>
    </div>
  </header>
  <div class="active_rest_razdel_container">
    <div class="active_rest_razdel_content">
      {UNDER_TEXT} {ACTIVE_REST}
    </div>
    <div class="active_rest_nav">
      <ul class="active_rest_navigation">
        {MENU_RAZDEL}
      </ul>
    </div>
  </div>
  {POPULAR_TRIP} 
  {FOOTER}
</body>

</html>