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
  <script type="text/javascript" src="map_object.php?id={ID}"></script>
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
          <h2>{ATTR_NAME}</h2>
        </div>
        <div class="path">
          <p>Путеводитель >
            <a href="guide_type.php">По типам</a> >
            <a href="attr_type.php?id={TYPE_ID}">{TYPE_NAME}</a> > {ATTR_NAME}</p>
        </div>
      </div>
    </div>
  </header>
  <div class="city_container">
    <div class="city_info">
      <div class="city_content">
        {TEXT}
      </div>
      <div class="city_description">
        <div id="object_map"></div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAk6n52w-no4_Eqrke7RtY-4CvYBSUxtB8&callback=initMapObject">
        </script>
        <div class="coords bottom">Координаты: {ATTR_COORD_LAT}, {ATTR_COORD_LNG}</div>
        {ATTR_DESCRIPTION}
      </div>
    </div>
    <div class="galery_container">
      {GALLERY} {PANORAMA}
    </div>
    <div class="city_attraction_container">
      <h3>Достопримечательности поблизости</h3>
      <div class="attraction_container">
        {ATTR_NEAR}
      </div>
    </div>
    {POPULAR_TRIP} {FOOTER}
</body>

</html>