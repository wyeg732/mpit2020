<?php 
   session_start();
   $connect = mysqli_connect("127.0.0.1", "root", "Starkova24", "vhelp"); 
   
   $users_id = $_POST['users_id'];

   $user = mysqli_query($connect, "SELECT * from users WHERE id='{$users_id}' ");
   
     $user_info = $user-> fetch_assoc();
   
   
   $app = mysqli_query($connect, "SELECT * from apps WHERE users_id='{$users_id}' ");
     $app_info = $app-> fetch_assoc();
   
   
      ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="../fonts/css/all.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <style type="text/css">
         .flex-grid {
         display: flex;
         min-height: 180px;
         min-width: 200px;
         }
         .flex-grid div {
         flex: 1;
         margin: 0 20px 20px 0;
         }
         .flex-grid div:last-child {
         margin-right: 0;
         }
         .button{
         display: block;
         width: 300px;
         height: 60px;
         margin-top: 50px;
         margin: auto;
         padding: 15px 40px;
         border: none;
         background-size: 300% 100%;
         color: white;
         font-family: 'Comfortaa';
         font-size: 20px;
         }
         .button:hover{
         background-position: 100% 0;
         moz-transition: all .4s ease-in-out;
         -o-transition: all .4s ease-in-out;
         -webkit-transition: all .4s ease-in-out;
         transition: all .4s ease-in-out;
         }
         .info{
         text-align: center;
         }
         .info:nth-child(2){
         border-right: 2px solid black;
         border-left: 2px solid black;
         padding: 0 20px;
         }
         .info p{
         text-align: center;
         padding: 10px;
         overflow: scroll;
         }
         .info i{
         font-size: 50px;
         display: block;
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         }

         .info h6{
         font-size: 15px;
         font-weight: 900;
         margin-top: 30px;}
         @media screen and (max-width: 800px) {
         .title{
         font-size: 1.5em;
         }
         .flex-grid{
         display: initial;
         width: 500px;
         margin: auto;
         }
         .info:nth-child(2){
         border:none;
         }
         .info{
         text-align: center;
         }
         .info p{
         height: auto;
         padding: 0 40px;
         }
         .main .title{
         font-size: 30px;
         }

         .info h2{
            font-weight: 900;
         }
         
      </style>
   </head>
   <body>
      <div class="navbar_">
         <div>
            <p>главное</p>
         </div>
         <div>
            <p>навыки</p>
         </div>
         <div>
            <p>работы</p>
         </div>
         <div>
            <p>логин</p>
         </div>
      </div>
      <div class="main">
         <h1 class="title"><?php echo $user_info['name'] ?></h1>
         <div class="org_name"><?php echo $user_info['email']; ?></div>
      </div>
      <div class="about">
         <div class="flex-grid">
            <div class="info">
              <h2>Контакты</h2>
               <p><b>Почта: </b><?php echo $user_info['email'] ?></p>
               <p><b>Телефон: </b><?php echo $user_info['phone'] ?></p>

               
            </div>
            <div class="info">
               <h2>О себе</h2>
               <p><?php echo $user_info['about'] ?></p>
            </div>
            <div class="info">
               <h2>Доп. информация</h2>
               <p><?php 
               if ($app_info['add_info'] == '') {
                 echo 'Доп. информация отсутсутсвует';
               }else{
                 echo $app_info['add_info'];
               }
             ?></p>
            </div>
         </div>

         <div class="flex-grid">
            <div class="info">
               <h2>Мотивация</h2>
               <p><?php echo $app_info['motivation'] ?></p>
            </div>
            <div class="info">
               <h2>Опыт</h2>
               <p><?php echo $app_info['experience'] ?></p>
            </div>
            <div class="info">
               <h2>Навыки</h2>
               <p><?php echo $app_info['skills'] ?></p>
            </div>
         </div>

      </div>
   
        <a href="../admin/index.php"> <button class="button <?php echo $_POST['skill_id']?>">Вернуться назад</button></a>
      
   </body>
</html>