<div class="form_left">
  <form action="" method="POST" enctype="multipart/form-data" class="redact_form">
    <p>Тип:
      <select class="select" name="type">
        <option value="0">Все типы</option>
        {TYPE}
      </select>
    </p>
    <p>Область:
      <select class="select" name="region">
        <option value="0">Все области</option>
        {REGION}</select>
    </p>
</div>
<input type="submit" class="redact_submit" name="submit" value="Поиск">
</form>
<p>
  <div class="attraction_select">
    {ATTRACTION}
  </div>
</p>