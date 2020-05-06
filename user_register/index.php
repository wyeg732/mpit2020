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
      <form action='../login/index.php' method="POST" class='form'>
         <h1 style="color: white">Регистрация участника</h1>
         <p class='field required'>
            <label class='label required' for='name'>ФИО</label>
            <input class='text-input' id='name' name='name' required type='text' value=''>
         </p>
         <p class='field required half'>
            <label class='label' for='email'>Почта</label>
            <input class='text-input' id='email' name='email' required type='email'>
         </p>
         <p class='field half'>
            <label class='label' for='phone'>Номер телефона</label>
            <input class='text-input' id='phone' name='phone' type='phone'>
         </p>
         <!--   <p class='field half required'>
            <label class='label' for='login'>Пароль</label>
            <input class='text-input' id='login' name='login' required type='text' value=''>
            </p> -->
         <p class='field half required'>
            <label class='label' for='password'>Пароль</label>
            <input class='text-input' id='password' name='password' required type='password'>
         </p>
         <div class='field'>
            <label class='label'>Какие языки вы знаете?</label>
            <ul class='checkboxes'>
               <li class='checkbox'>
                  <input class='checkbox-input' id='choice-0' name='lang[]' type='checkbox' value='Якутский'>
                  <label class='checkbox-label' for='choice-0'>Якутский</label>
               </li>
               <li class='checkbox'>
                  <input class='checkbox-input' id='choice-1' name='lang[]' type='checkbox' value='Русский'>
                  <label class='checkbox-label' for='choice-1'>Русский</label>
               </li>
               <li class='checkbox'>
                  <input class='checkbox-input' id='choice-2' name='lang[]' type='checkbox' value='Английский'>
                  <label class='checkbox-label' for='choice-2'>Английский</label>
               </li>
            </ul>
         </div>
         <div class='field'>
            <label class='label'>Куда вы бы хотели поступить?</label>
            <ul class='options'>
               <li class='option'>
                  <input class='option-input' id='option-0' name='uni' type='radio' value='Центровуз'>
                  <label class='option-label' for='option-0'>Центровуз</label>
               </li>
               <li class='option'>
                  <input class='option-input' id='option-1' name='uni' type='radio' value='Дальний Восток'>
                  <label class='option-label' for='option-1'>Дальний Восток</label>
               </li>
               <li class='option'>
                  <input class='option-input' id='option-2' name='uni' type='radio' value='Заграницей'>
                  <label class='option-label' for='option-2'>Заграницей</label>
               </li>
            </ul>
         </div>
         <p class='field half'>
            <label class='label' for='select'>На какую специальность?</label>
            <select class='select' id='select' name="major">
               <option selected value=''></option>
               <option value='Специальность 0'>Специальность 0</option>
               <option value='Специальность 1'>Специальность 1</option>
               <option value='Специальность 2'>Специальность 2</option>
            </select>
         </p>
         <p class='field'>
            <label class='label' for='about'>Напишите немного о себе (250 слов макс.)</label>
            <textarea class='textarea' cols='50' id='about' name='about' rows='4'></textarea>
         </p>
         <label class='label' style='font-weight: 100;'>Уже есть аккаунт? <a href='../login/index.php' style='color: #03b1fc'>Войдите!</a></label>
         <input name="hidden_value" value="user" style="display: none">
         <p class='field half'>
            <input class='button' type='submit' value='Send'>
         </p>
      </form>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.customSelect/0.5.1/jquery.customSelect.min.js'></script>
      <script  src="./script.js"></script>
   </body>
</html>