<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Туристические маршруты</title>
  <link rel="stylesheet" href="style.css">
  <script src="js/jquery.js"></script>
  <script src="js/index.js"></script>
</head>

<body>
  <header>
    <div class="slider">
      <img class="slider_img" src="images/belarus_trip.jpg" alt="" />
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
          <h2>ПОИСК ТУРИСТИЧЕСКИХ МАРШРУТОВ</h2>
        </div>
      </div>
    </div>
  </header>

  <div class="tourist_select_container">
    <form action="" method="POST" name="form" enctype="multipart/form-data" class="customForm">
      <div class="select">
        <a href="javascript:void(0);" class="slct select_transport">Способ передвижения:</a>
        <ul class="ul_drop">
          {TRANSPORT}
        </ul>
        <input type="hidden" id="select" name="transport" />
      </div>

      <div class="select">
        <a href="javascript:void(0);" class="slct select_startpoint">Откуда:</a>
        <ul class="ul_drop">
          {START_POINT}
        </ul>
        <input type="hidden" id="select" name="start_point" />
      </div>

      <div class="select">
        <a href="javascript:void(0);" class="slct select_length">Продолжительность:</a>
        <ul class="ul_drop">
          {DURATION}
        </ul>
        <input type="hidden" id="select" name="time" />
      </div>
      <input type="submit" class="submit" value="Поиск" name="submit" />
      <div class="reset-form">
        <button>Сброс</button>
      </div>
    </form>
  </div>
  <div class="tourist_routes_container tourist_routes_container_select">
    <div class="tourist_routes">
      {ROUT_CARD}
    </div>
  </div>
  {FOOTER}
</body>

</html>