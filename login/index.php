<?php 
   session_start();
   $connect = mysqli_connect("127.0.0.1", "root", "Starkova24", "vhelp"); 
   
   if ($_POST["hidden_value"] == "user") {
   
     $langs = implode(",", $_REQUEST["lang"]);
   print $product_name;
   
   $query = mysqli_query($connect, 
     "INSERT INTO users
     (name, email, phone, password, lang, uni, major, about) 
   
     VALUES ('" . $_POST['name'] . "', 
         '" . $_POST['email'] . "', 
         '" . $_POST['phone'] . "', 
         '" . $_POST['password'] . "',
         '" . $langs . "',
         '" . $_POST['uni'] . "',
         '" . $_POST['major'] . "',
         '" . $_POST['about'] . "'
   
          )");
   }
   elseif ($_POST["hidden_value"] == "organization") {
   
   $query = mysqli_query($connect, 
     "INSERT INTO orgs
     (name, email, password, org_name, position, org_type, link) 
   
     VALUES ('" . $_POST['name'] . "', 
         '" . $_POST['email'] . "', 
         '" . $_POST['password'] . "', 
         '" . $_POST['org_name'] . "',
         '" . $_POST['position'] . "',
         '" . $_POST['org_type'] . "',
         '" . $_POST['link'] . "'
   
          )");
   
   }
   
   
    ?>
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
      <form action='check.php' method="POST" class='form'>
         <?php if (isset($_POST["hidden_value"])) {
            echo ' <h1 style="color: white">Спасибо за регистрацию! <br><br> Для продолжения, пожалуйста, войдите в свой аккаунт:</h1>';
            echo '<input name="hidden_value" style="display: none" value="' . $_POST["hidden_value"]. '">';
            } else{
              echo '<h1 style="color: white">Вход в аккаунт:</h1>';
            }
            
            ?>
         <p class='field required ' >
            <label class='label' for='email' >Почта</label>
            <input class='text-input' id='email' name='email' required type='email'>
         </p>
         <p class='field required'>
            <label class='label' for='password'>Пароль</label>
            <input class='text-input' id='password' name='password' required type='password'>
         </p>
         <?php if (isset($_POST["hidden_value"]) == false) {
            echo "<div class='field required'>
            <label class='label'>Кем вы являетесь?</label>
            <ul class='options'>
            <li class='option'>
              <input class='option-input' id='option-0' name='type' type='radio' value='user' required>
              <label class='option-label' for='option-0'>Частное лицо</label>
            </li>
            <li class='option'>
              <input class='option-input' id='option-1' name='type' type='radio' value='org' required>
              <label class='option-label' for='option-1'>Организация</label>
            </li>
            </ul>
            </div>
            <label class='label' style='font-weight: 100;'>Нет аккаунта?<br> Зарегиструйтесь как <a href='../user_register/index.php' style='color: #03b1fc'>частное лицо</a> или <a href='../company_register/index.php' style='color: #03b1fc'>организация</a></label>
            
            ";
            
            
            
            } 
            
            
            
            ?>
         <p class='field'>
            <input class='button' type='submit' value='Отправить'>
         </p>
      </form>
      <script  src="./script.js"></script>
   </body>
</html>