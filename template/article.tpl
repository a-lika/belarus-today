<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <meta name="keywords" content="{KEYWORDS}">
  <meta name="description" content="{DESCRIPTION}">
  <title>{TITLE}</title>

  <script src="js/jquery.js"></script>
  <script src="js/gsap.js"></script>
  <script src="js/index.js"></script>
</head>

<body>

  <header>
    <div class="slider">
      <img class="slider_img" src="images/{IMAGE}" alt="" />
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
        <div class="title_info">
          <p>
            <span class="title_info_date">{DATE}</span>
            <span class="title_info_theme">#{CATEGORY}</span>
          </p>
        </div>
      </div>
    </div>
  </header>

  <div class="article_container">
    <div class="article_info">
      <div class="article_content">
        {TEXT} {PANORAMA}
      </div>
      <div class="article_news">
        <div class="article_news_name">
          <h3>Похожие записи</h3>
        </div>
        {SIMILAR_ARTICLE}
      </div>
    </div>
  </div>
  {POPULAR_TRIP}
  </div>
  {FOOTER}
</body>

</html>