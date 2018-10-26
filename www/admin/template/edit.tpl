<div class="form_left">
  <form action='update.php' method="POST" enctype="multipart/form-data" class="redact_form">

    <input type="hidden" name="id" value="{ID}">

    <p>Название:
      <input type="text" class="input_text" name="name" value="{NAME}" required/>
    </p>
    <p>Тип:
      <select class="select" name="type">{TYPE}</select>
    </p>
    <p>Область:
      <select class="select" name="region">{REGION}</select>
    </p>
    <p>Изображение:
      <input type="file" class="input_figure" name="image" multiple accept="image/*" />
    </p>
    <p>Маленькое изображение:
      <input type="file" class="input_figure" name="image_small" multiple accept="image/*" />
    </p>
    <p>Полное описание:
      <textarea name="txt" id="editor1" cols="45" rows="5">{FULL_INFO}</textarea>
    </p>
    <script type="text/javascript">
      var ckeditor1 = CKEDITOR.replace('editor1');
      AjexFileManager.init({
        returnTo: 'ckeditor',
        editor: ckeditor1
      });
    </script>


    <p>Краткое описание:
      <textarea name="text_short" id="editor2" required />{SHORT_INFO}</textarea>
    </p>
    <script type="text/javascript">
      var ckeditor2 = CKEDITOR.replace('editor2');
      AjexFileManager.init({
        returnTo: 'ckeditor',
        editor: ckeditor2
      });
    </script>

    <p>Рейтинг:
      <input type="text" class="input_figure" name="rating" value="{RAITING}" required/>
    </p>

    <h3>Карта</h3>
    <p>Маркер:
      <span class="line_input">Широта</span>
      <input type="text" class="input_coord" name="marker_lat" value="{MARKER_LAT}">
      <span class="line_input">Долгота</span>
      <input type="text" class="input_coord" name="marker_lng" value="{MARKER_LNG}">
    </p>
    <p>Центр карты:
      <span class="line_input">Широта</span>
      <input type="text" class="input_coord" name="map_lat" value="{MAP_LAT}">
      <span class="line_input">Долгота</span>
      <input type="text" class="input_coord" name="map_lng" value="{MAP_LNG}">
      <span class="line_input">Масштаб</span>
      <input type="text" class="input_coord" name="map_zoom" value="{ZOOM}">
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
      <input type="text" class="input_text" name="panorama_name" value="{PANORAMA_NAME}">
    </p>
    <p>Ссылка:
      <input type="text" class="input_text" name="panorama_link" value="{PANORAMA_LINK}">
    </p>
    <p>Координаты:
      <input type="text" class="input_figure" name="panorama_coord" value="{PANORAMA_COORD}">
    </p>
    <!-- -->
    <h3>SEO</h3>
    <p>Заголовок:
      <input type="text" class="input_figure" name="title" required value="{TITLE}">
    </p>
    <p>Ключевые слова:
      <textarea class="input_textarea" name="keywords">{KEYWORDS}</textarea>
    </p>
    <p>Описание:
      <textarea class="input_textarea" name="description">{DESCRIPTION}</textarea>
    </p>

</div>
<input type="submit" class="redact_submit" name="submit" value="Сохранить">

</form>