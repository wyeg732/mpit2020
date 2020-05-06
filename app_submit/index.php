<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title></title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700'>
      <link rel="stylesheet" href="./style.css">
   </head>
   <body>
      <form method="post" action='insert.php' class='form'>
         <!--   <p class='field required'>
            <label class='label required' for='name'>Мотивация</label>
            <input class='text-input' id='name' name='name' required type='text'  value=''>
            </p> -->
         <h1 style="color: white">Заявка на работу:</h1>
         <p class='field required'>
            <label class='label' for='motivation'>Мотивация</label>
            <textarea class='textarea' cols='50' id='motivation' placeholder='Почему вы заинтересованы на данной работе?' name='motivation' rows='4'></textarea>
         </p>
         <p class='field required'>
            <label class='label' for='experience'>Предыдущий опыт</label>
            <textarea class='textarea' cols='50' id='experience' name='experience' rows='4' placeholder="Опишите любой ваш опыт, который может быть связан с данной работой"></textarea>
         </p>
         <p class='field required'>
            <label class='label' for='skills'>Опишите ваши навыки и умения релевантные для данного задания</label>
            <textarea class='textarea' cols='50' id='skills' name='skills' rows='4' placeholder="Напишите не менее 250 слов"></textarea>
         </p>
         <p class='field'>
            <label class='label' for='add_info'>Дополнительная информация</label>
            <textarea class='textarea' cols='50' id='add_info' name='add_info' rows='4'></textarea>
         </p>
         <input style="display: none" name="gigs_id" value="<?php echo $_POST['gigs_id']?>">
         <input style="display: none" name="orgs_id" value="<?php echo $_POST['orgs_id']?>">
         <p class='field'>
            <input class='button' type='submit' value='Отправить'>
         </p>
      </form>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.customSelect/0.5.1/jquery.customSelect.min.js'></script>
      <script  src="./script.js"></script>
   </body>
</html>