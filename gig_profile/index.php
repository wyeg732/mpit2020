<?php 
   session_start();
   $connect = mysqli_connect("127.0.0.1", "root", "Starkova24", "vhelp"); 
   
   $query = mysqli_query($connect, "SELECT * from gigs WHERE id='".$_POST['gig_id']."' ");
   
     $gig_info = $query-> fetch_assoc();
   
   
   $orgs_id = $gig_info['orgs_id'];
   
   $org = mysqli_query($connect, "SELECT * from orgs WHERE id='{$orgs_id}' ");
     $fetch_org = $org-> fetch_assoc();
   
   
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
         .fake_button{
         text-align: justify;
         background:none;
         border:none;
         }
         .fake_button:hover{
         color: #03b1fc;
         }
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
         text-align: justify;
         padding: 10px;
         height: 250px;
         overflow: scroll;
         }
         .info i{
         font-size: 50px;
         display: block;
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         }
         .navbar_ a{
         color: white
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
         }
      </style>
   </head>
   <body>
      <div class="navbar_">
         <div>
            <p><a href="../index.php">главная</a></p>
         </div>
         <div>
            <p><a href="#skills">навыки</a></p>
         </div>
         <div>
            <p><a href="#jobs">работы</a></p>
         </div>
         <div>
            <p><a href="">мой аккаунт</a></p>
         </div>
      </div>
      <div class="main">
         <h1 class="title"><?php echo $gig_info['title'] ?></h1>
         <div class="org_name"><?php echo $fetch_org['org_name']; ?></div>
      </div>
      <div class="about">
         <div class="flex-grid">
            <div class="info">
               <h2>Что нужно делать</h2>
               <p><?php echo $gig_info['todo'] ?></p>
               <i class="far <?php echo $gig_info['skill_icon'] . " "; echo $gig_info['skill_id'] ?> "></i>
               <h6><?php echo $gig_info['skill_name'] ?></h6>
            </div>
            <div class="info">
               <h2>Мотивация и цели</h2>
               <p><?php echo $gig_info['motivation'] ?></p>
               <i class="far fa-clock <?php echo $gig_info['skill_id'];?>"></i>
               <h6><?php echo $gig_info['hours'] ?> часов в неделю</h6>
            </div>
            <div class="info">
               <h2>Требования</h2>
               <p><?php echo $gig_info['reqs'] ?></p>
               <i class="far fa-star <?php echo $gig_info['skill_id']?>"></i>
               <h6>Удаленная работа: <?php echo $gig_info['remote_work'];?> </h6>
            </div>
         </div>
      </div>
      <form method="POST" action="<?php
         if ($_SESSION["id"] == 0) {
          echo '../login/index.php';
         
         }else{
            echo '../app_submit/index.php';
         
         } ?>
         ">
         <input style="display: none" name="gigs_id" value="<?php echo $gig_info['id'];?>">
         <input style="display: none" name="orgs_id" value="<?php echo $gig_info['orgs_id'];?>">
         <button class="button <?php echo $gig_info['skill_id']?>">Отправить заявку</button>
      </form>
      <h1 class="title2">Еще работы от этой организации</h1>
      <div class="jobs ">
         <?php 
            $gigs = mysqli_query($connect, "
             SELECT * from gigs where orgs_id='{$orgs_id}'order by gigs.id desc
              ")or die(mysqli_error($connect));
            
            while ($row = $gigs->fetch_assoc()) {
            
            ?>
         <div class="card_ " id="<?php echo $row['skill_id']?>">
            <div class="thumb <?php echo $row['skill_id'] ?>">
               <i class="fas <?php echo $row['skill_icon'] ?>"></i> <span><?php echo $row['skill_name'] ?></span>
            </div>
            <div class="infos">
               <h2 class="title">
                  <form method="post" action="index.php" id="show">
                     <button class="fake_button" type="submit"><?php echo $row['title'] ?></button>
                     <input style="display: none" name="gig_id" value="<?php echo $row['id']?>">
                  </form>
               </h2>
               <h3 class="company">
                  <?php 
                     $org = mysqli_query($connect, "SELECT * from orgs WHERE id='".$row['orgs_id']."' ");
                     
                       $org_info = $org-> fetch_assoc();
                     
                       echo $org_info['org_name'];
                     
                     
                      ?>
               </h3>
               <div class="description-block">
                  <div class="time">
                     <span class="hours"><?php echo $row['hours'] ?></span>
                     <span>часов в неделю</span>
                  </div>
                  <div class="skills">Удаленная работа: <?php echo $row['remote_work'] ?></div>
                  <div class="places">мест осталось: <?php echo $row['seats'] ?></div>
               </div>
            </div>
         </div>
         <?php } ?>
      </div>
   </body>
</html>