<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700'><link rel="stylesheet" href="./style.css">

</head>
<body>
<form method="post" action='insert.php' class='form'>
  <p class='field required'>
    <label class='label required' for='title'>Краткое описание</label>
    <input class='text-input' id='title' name='title' required type='text' value=''>
  </p>
  <p class='field required'>
    <label class='label required' for='todo'>Опишите что нужно будет делать</label>
    <textarea class='textarea' cols='50' id='todo' required name='todo' rows='4'></textarea>
  </p>
  <p class='field required'>
    <label class='label required' for='motivation'>Опишите мотивацию и цели данного задания</label>
    <textarea class='textarea required' required cols='50' id='motivation' name='motivation' rows='4'></textarea>
  </p>
    <p class='field required'>
    <label class='label required'  requiredfor='reqs'>Требования для кандидатов</label>
    <textarea class='textarea' required cols='50' id='reqs' name='reqs' rows='4'></textarea>
  </p>
   <p class='field half required'>
    <label class='label required'  for='select'>К какой секции относится данное задание?</label>
    <select class='select' required id='select' name="skills">
      <option selected value=''></option>
      <option value='skill1'>Исследовательская работа</option>
      <option value='skill2'>Стажировка</option>
      <option value='skill3'>Письмо и редактирование</option>
      <option value='skill4'>Разработка</option>
      <option value='skill5'>Перевод текстов</option>
      <option value='skill6'>Преподавание и обучение</option>
      <option value='skill7'>Дизайн и рисунок</option>
      <option value='skill8'>Волонтерство</option>
      <option value='skill9'>Лидерство</option>

    </select>
  </p>

  <p class='field required half'>
    <label class='label' for='hours'>Часы в неделю</label>
    <input class='text-input' id='hours' name='hours' required type='number'>
  </p>

    <p class='field required half'>
    <label class='label' for='seats'>Мест доступно:</label>
    <input class='text-input' id='seats' name='seats' required type='number'>
  </p>
  
  <div class='field required'>
    <label class='label required' required>Возможно ли работать удаленно?</label>
    <ul class='options'>
      <li class='option'>
        <input class='option-input' id='option-0' name='remote_work' type='radio' value='Да'>
        <label class='option-label' for='option-0'>Да</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-1' name='remote_work' type='radio' value='Нет'>
        <label class='option-label' for='option-1'>Нет</label>
      </li>
    </ul>
  </div>
<!-- 
    <div class='field half'>
    <label class='label'>Какие языки вы знаете?</label>
    <ul class='checkboxes'>
      <li class='checkbox'>
        <input class='checkbox-input' id='choice-0' name='choice' type='checkbox' value='0'>
        <label class='checkbox-label' for='choice-0'>Якутский</label>
      </li>
      <li class='checkbox'>
        <input class='checkbox-input' id='choice-1' name='choice' type='checkbox' value='1'>
        <label class='checkbox-label' for='choice-1'>Русский</label>
      </li>
      <li class='checkbox'>
        <input class='checkbox-input' id='choice-2' name='choice' type='checkbox' value='2'>
        <label class='checkbox-label' for='choice-2'>Английский</label>
      </li>
    </ul>
  </div> -->

  <p class='field half'>
    <input class='button' type='submit' value='Send'>
  </p>
</form>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.customSelect/0.5.1/jquery.customSelect.min.js'></script>

<script  src="./script.js"></script>

</body>
</html>
