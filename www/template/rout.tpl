<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="js/jquery.js"></script>
  <script src="js/index.js"></script>
  <script type="text/javascript" src="map_rout.php?id={ID}"></script>
  <title>{NAME}</title>
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
      </div>
    </div>
  </header>

  <div class="routes_container">
    <div class="routes_info">
      <div class="rout_content">
        {TEXT}
      </div>
      <div class="rout_description">
        <div id="rout_map"></div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAk6n52w-no4_Eqrke7RtY-4CvYBSUxtB8&callback=initMapRout">
        </script>
        <div class="rout_plan bottom">
          <h3>Маршрут</h3>
          {MARKER} {MARKER_FINISH}
        </div>
        {DESCRIPTION}
      </div>
    </div>
    {OTHER_ROUT}
  </div>
  {FOOTER}
</body>

</html>