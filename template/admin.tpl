<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <title>Панель администратора</title>
  <link rel="stylesheet" href="style_admin.css">
  <script src="jquery.js"></script>
  <script src="gsap.js"></script>
  <script src="index.js"></script>
</head>

<body>
  <header>
    <div class="logo">
      <div class="admin">Панель администратора</div>
      <a href="{LINK_SITE}">
        <img src="images/logo.png">
      </a>
      <h3>Belarus Today</h3>
      <br/>
      <h5>
        <span class="online">Online</span> - путеводитель по Беларуси</h5>
      <div class="cancel">
        <a href="">Выход</a>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="panel">
      <div class="block_name">
        <div class="name">Главная страница</div>
        <a href="#">
          <div class="action">Редактировать</div>
        </a>
      </div>

      <div class="block_name">
        <div class="name">Достопримечательность</div>
        <a href="#">
          <div class="action">Добавить</div>
        </a>
        <a href="#">
          <div class="action">Редактировать</div>
        </a>
        <a href="#">
          <div class="action">Удалить</div>
        </a>
      </div>

      <div class="block_name">
        <div class="name">Город</div>
        <a href="#">
          <div class="action">Добавить</div>
        </a>
        <a href="#">
          <div class="action">Редактировать</div>
        </a>
        <a href="#">
          <div class="action">Удалить</div>
        </a>
      </div>

      <div class="block_name">
        <div class="name">Маршрут</div>
        <a href="#">
          <div class="action">Добавить</div>
        </a>
        <a href="#">
          <div class="action">Редактировать</div>
        </a>
        <a href="#">
          <div class="action">Удалить</div>
        </a>
      </div>

      <div class="block_name">
        <div class="name">Блог</div>
        <a href="#">
          <div class="action">Добавить</div>
        </a>
        <a href="#">
          <div class="action">Редактировать</div>
        </a>
        <a href="#">
          <div class="action">Удалить</div>
        </a>
      </div>

      <div class="block_name">
        <div class="name">Полезное</div>
        <a href="#">
          <div class="action">Редактировать</div>
        </a>
      </div>
    </div>

    <div class="content">
      <div class="redactor">Достопримечательность</div>
      <div class="form_left">
        <form action="" method="POST" enctype="multipart/form-data" class="redact_form">
          <p>Название:
            <input type="text" class="input_text" name="name" required/>
          </p>
          <p>Тип:
            <select class="select" name="type">{TYPE}</select>
          </p>
          <p>Область:
            <select class="select" name="region">{REGION}</select>
          </p>
          <p>Изображение:
            <input type="file" class="input_figure" name="image" required/>
          </p>
          <p>Маленькое изображение:
            <input type="file" class="input_figure" name="image_small" required/>
          </p>
          <p>Полное описание:
            <textarea class="input_textarea" name="text" required /></textarea>
          </p>
          <p>Краткое описание:
            <textarea class="input_textarea" name="text_short" required /></textarea>
          </p>
          <p>Рейтинг:
            <input type="text" class="input_figure" name="text_short" placeholder="Введите цифру от 1 до 3" required/>
          </p>

          <h3>Карта</h3>
          <p>Маркер:
            <span class="line_input">Широта</span>
            <input type="text" class="input_coord" name="marker_lat" required/>
            <span class="line_input">Долгота</span>
            <input type="text" class="input_coord" name="marker_lng" required/>
          </p>
          <p>Центр карты:
            <span class="line_input">Широта</span>
            <input type="text" class="input_coord" name="map_lat" required/>
            <span class="line_input">Долгота</span>
            <input type="text" class="input_coord" name="map_lng" required/>
            <span class="line_input">Масштаб</span>
            <input type="text" class="input_coord" name="map_zoom" required/>
          </p>

          <h3>Фотогалерея</h3>
          <p> Порядковый номер
            <input type="text" class="input_coord" name="photo_number">
            <span class="line_input">Изображение</span>
            <input type="file" class="input_figure" name="photo">
            <br>
            <a href="#">Добавить поле</a>
          </p>

          <h3>Панорама</h3>
          <p>Название:
            <input type="text" class="input_text" name="panorama_name">
          </p>
          <p>Ссылка:
            <input type="text" class="input_text" name="panorama_link">
          </p>
          <p>Координаты:
            <input type="text" class="input_figure" name="panorama_coord">
          </p>

          <h3>SEO</h3>
          <p>Заголовок:
            <input type="text" class="input_figure" name="title" required />
          </p>
          <p>Ключевые слова:
            <textarea class="input_textarea" name="keywords" required /></textarea>
          </p>
          <p>Описание:
            <textarea class="input_textarea" name="description" required /></textarea>
          </p>

          <h3>Достопримечательности поблизости</h3>
          <p>
            <ul class="attraction_select">
              {ATTRACTION_NEAR}
            </ul>
          </p>
      </div>
      <input type="submit" class="redact_submit" name="submit" value="Добавить">
      </form>
    </div>
  </div>
</body>

</html>