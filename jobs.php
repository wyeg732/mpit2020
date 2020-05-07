<?php 
   session_start();
   $connect = mysqli_connect("127.0.0.1", "root", "Starkova24", "vhelp"); 
   
   ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="fonts/css/all.css">
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
         .navbar_{
          position: relative;
          background-color: black;
          border-bottom: 1px solid white;
         }
         .navbar_ a{
         color: white
         }
         .opportunities{
          margin-top: 0;
          margin-bottom: 0;
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
      }
      </style>

</head>
<body>
           <div class="navbar_">
            <div>
               <p><a href="index.php">главная</a></p>
            </div>
            <div>
              <p><a href="index.php">о нас</a></p>
            </div>
            <div>
                <p><a href="user/index.php">мой аккаунт</a></p>
            </div>
            <div>
               <p><a href="session_kill.php">выйти</a></p>
            </div>
         </div>
<div class="opportunities">
         <a name="jobs"></a> 
         <h5 class="title_1"><?php 
            $result = mysqli_query($connect, "SELECT * FROM gigs");
            echo mysqli_num_rows($result); ?> возможностей доступно</h5>
         <p class="title_2">Online volunteering is a force for global development</p>
         <div class="jobs ">
            <?php 
               $gigs = mysqli_query($connect, "
                SELECT * from gigs order by gigs.id desc
                 ")or die(mysqli_error($connect));
               
               while ($row = $gigs->fetch_assoc()) {
               
               ?>
            <div class="card_ " id="<?php echo $row['skill_id']?>">
               <div class="thumb <?php echo $row['skill_id'] ?>">
                  <i class="fas <?php echo $row['skill_icon'] ?>"></i> <span><?php echo $row['skill_name'] ?></span>
               </div>
               <div class="infos">
                  <h2 class="title">
                     <form method="post" action="gig_profile/index.php" id="show">
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
          <a href="../"><button class="button skill3">Назад</button></a>
      </div>
</body>
</html>
