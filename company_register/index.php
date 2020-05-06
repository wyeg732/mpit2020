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
         <h1 style="color: white">Регистрация организации</h1>
         <p class='field required'>
            <label class='label required' for='name'>ФИО</label>
            <input class='text-input' id='name' name='name' required type='text' value=''>
         </p>
         <p class='field required half'>
            <label class='label' for='email'>Почта</label>
            <input class='text-input' id='email' name='email' required type='email'>
         </p>
         <p class='field half required'>
            <label class='label' for='password'>Пароль</label>
            <input class='text-input' id='password' name='password' required type='password'>
         </p>
         <p class='field half required'>
            <label class='label' for='org_name'>Название организации</label>
            <input class='text-input' name='org_name' required type='text' value=''>
         </p>
         <p class='field half required'>
            <label class='label' for='position'>Ваша должность</label>
            <input class='text-input' id='position' name='position' required type='text' value=''>
         </p>
         <div class='field'>
            <label class='label'>Выберите тип организации</label>
            <ul class='options'>
               <li class='option'>
                  <input class='option-input' id='option-0' name='org_type' type='radio' value='Общественная организация'>
                  <label class='option-label' for='option-0'>Общественная организация</label>
               </li>
               <li class='option'>
                  <input class='option-input' id='option-1' name='org_type' type='radio' value='Неправительственная организация'>
                  <label class='option-label' for='option-1'>Неправительственная организация</label>
               </li>
               <li class='option'>
                  <input class='option-input' id='option-2' name='org_type' type='radio' value='Другое'>
                  <label class='option-label' for='option-2'>Другое</label>
               </li>
            </ul>
         </div>
         <!--   <div class='field half'>
            <label class='label'>Еще какой то вопрос?</label>
            <ul class='checkboxes'>
              <li class='checkbox'>
                <input class='checkbox-input' id='choice-0' name='choice' type='checkbox' value='0'>
                <label class='checkbox-label' for='choice-0'>Ответ 0</label>
              </li>
              <li class='checkbox'>
                <input class='checkbox-input' id='choice-1' name='choice' type='checkbox' value='1'>
                <label class='checkbox-label' for='choice-1'>Ответ 1</label>
              </li>
              <li class='checkbox'>
                <input class='checkbox-input' id='choice-2' name='choice' type='checkbox' value='2'>
                <label class='checkbox-label' for='choice-2'>Ответ 2</label>
              </li>
            </ul>
            </div> -->
         <p class='field required'>
            <label class='label' for='link'>Ссылка на сайт организации</label>
            <input class='text-input' id='link' name='link' required type='text' value=''>
         </p>
         <label class='label' style='font-weight: 100;'>Уже есть аккаунт? <a href='../login/index.php' style='color: #03b1fc'>Войдите!</a></label>
         <input name="hidden_value" value="organization" style="display: none">
         <p class='field '>
            <input class='button' type='submit' value='Отправить'>
         </p>
      </form>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.customSelect/0.5.1/jquery.customSelect.min.js'></script>
      <script  src="./script.js"></script>
   </body>
</html>