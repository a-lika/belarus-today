<div class="form_left">
  <form action="" method="POST" enctype="multipart/form-data" class="redact_form">
    <a href="../../attraction.php?id={ID}">
      <div class="attraction">
        <img src="../images/{IMAGE}">
        <p>{NAME}</p>
      </div>
    </a>
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
<input type="submit" class="redact_submit" name="submitSearch" value="Поиск">
<p>
  <div class="attraction_select">
    {ATTRACTION_NEAR}
  </div>
</p>
<input type="submit" class="redact_submit" name="submit" value="Связать">

</form>