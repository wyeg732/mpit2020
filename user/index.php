<?php 
   session_start();
   $connect = mysqli_connect("127.0.0.1", "root", "Starkova24", "vhelp"); 
   
   $user_id = $_SESSION['id'];
   
   
   $user = mysqli_query($connect, "SELECT * from users WHERE id='{$user_id}' ");
   
     $user_info = $user-> fetch_assoc();
   
   
   // $orgs_id = $gig_info['orgs_id'];
   
   // $org = mysqli_query($connect, "SELECT * from orgs WHERE id='{$orgs_id}' ");
   //   $org_info = $org-> fetch_assoc();
   
   
   
   
      ?>
<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title></title>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.23/css/uikit.min.css'>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="../fonts/css/all.css">
      <link rel="stylesheet" href="./style.css">
   </head>
   <body>
      <div uk-sticky class="uk-navbar-container tm-navbar-container uk-active uk-light ">
         <div class="uk-container uk-container-expand uk-background-secondary">
            <nav uk-navbar>
               <div class="uk-navbar-left">
                  <a id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon></a>
                  <a href="#" class="uk-navbar-item uk-logo">
                  VHELP
                  </a>
               </div>
               <div class="uk-navbar-right uk-light">
                  <ul class="uk-navbar-nav">
                     <li>
                        <a href="../index.php"> На главную </span></a>
                     </li>
                     <li class="uk-text-bold">
                        <a href="../session_kill.php" class="uk-text-danger"> выйти </span></a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <div id="sidebar" class="tm-sidebar-left uk-background-secondary uk-light">
         <center>
            <div class="user">
               <img id="avatar" width="100" class="uk-border-circle" src="https://image.flaticon.com/icons/svg/167/167750.svg" />
               <div class="uk-margin-top"></div>
               <h3 class="uk-text-truncate"><?php echo $user_info['name'] ?></h3>
               <span id="status" class="uk-margin-bottom uk-label uk-label-success">
               <?php echo $user_info['major'] ?></span>
               <div id="email" ><?php echo $user_info['about'] ?></div>
            </div>
            <br />
         </center>
      </div>
      <div class="content-padder content-background">
         <div class="uk-section-small uk-section-default header">
            <div class="uk-container uk-container-large">
               <h1></span><?php echo $user_info['name'] ?></h1>
               <p>
                  <?php echo $user_info['email'] ?>
               </p>
            </div>
         </div>
         <div class="uk-section-small">
            <div class="uk-container opportunities">
               <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                  <li><a href="#">Сейчас в прогрессе</a></li>
                  <li><a href="#">Отправленные заявки</a></li>
                  <li><a href="#">Законченные</a></li>
               </ul>
               <ul class="uk-switcher uk-margin">
                  <li>
                     <div class="jobs ">
                        <?php 
                           $gigs = mysqli_query($connect, "
                            SELECT * from in_action 
                           
                            INNER JOIN gigs ON in_action.gigs_id = gigs.id
                           
                            WHERE in_action.users_id = '".$user_id."' and in_action.status = 'active'
                           
                             ")or die(mysqli_error($connect));
                           
                           // $row = $gigs-> fetch_assoc();
                           
                           // if ($row =! 0) {
                           
                           while ($row = $gigs->fetch_assoc()) {
                           
                           ?>
                        <div class="card_ " id="<?php echo $row['skill_id']?>">
                           <div class="thumb <?php echo $row['skill_id'] ?>">
                              <i class="fas <?php echo $row['skill_icon'] ?>"></i> <span><?php echo $row['skill_name'] ?></span>
                           </div>
                           <div class="infos">
                              <h2 class="title"><?php echo $row['title'] ?></h2>
                              <!-- <h3 class="company">Работает: <a href=""></a></h3> -->
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
                        <form method="post" action="show/index.php" id="show" style="display: none">
                           <input name="gig_id" value="<?php echo $row['id']?>">
                        </form>
                        <?php }
                           //          } else{ echo '<h3 style="width:500px; padding:0">Упс! На данное время у вас нет никаких работ в прогрессе</h3>';
                           // }
                           ?>
                     </div>
                  </li>
                  <li>
                     <table class="uk-table uk-table-middle uk-table-divider">
                        <thead>
                           <tr>
                              <th class="uk-table-shrink">ID работы</th>
                              <th>Организация</th>
                              <th>Ссылка на веб-сайт</th>
                              <th>Специальность</th>
                              <th>Часы</th>
                              <th>Удаленно</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php 
                              $apps = mysqli_query($connect, "
                               SELECT * from apps INNER JOIN orgs ON apps.orgs_id = orgs.id WHERE apps.users_id = '{$user_id}' ") or die(mysqli_error($connect));
                              
                              while ($fetch_apps = $apps->fetch_assoc()) {
                              
                              ?>          
                           <tr>
                              <td><?php echo $fetch_apps['gigs_id'] ?></td>
                              <td><?php echo $fetch_apps['org_name'] ?></td>
                              <td><a href="<?php echo $fetch_apps['link'] ?>"><?php echo $fetch_apps['link'] ?></a></td>
                              <td>
                                 <?php 
                                    $gig = mysqli_query($connect, "SELECT * from gigs WHERE id='".$fetch_apps['gigs_id']."' ");
                                    
                                      $gig_info = $gig-> fetch_assoc();
                                    
                                      echo $gig_info['skill_name'];
                                    
                                    
                                     ?>
                              </td>
                              <td><?php echo $gig_info['hours']; ?> в неделю</td>
                              <td><?php echo $gig_info['remote_work'] ?></td>
                           </tr>
                           <?php } ?>
                        </tbody>
                     </table>
                  </li>
                  <li>
                     <div class="jobs ">
                        <?php 
                           $gigs = mysqli_query($connect, "
                            SELECT * from in_action 
                           
                            INNER JOIN gigs ON in_action.gigs_id = gigs.id
                           
                            WHERE in_action.users_id = '".$user_id."' and in_action.status = 'inactive'
                           
                             ")or die(mysqli_error($connect));
                           
                           while ($row = $gigs->fetch_assoc()) {
                           
                           ?>
                        <div class="card_ " id="<?php echo $row['skill_id']?>">
                           <div class="thumb <?php echo $row['skill_id'] ?>">
                              <i class="fas <?php echo $row['skill_icon'] ?>"></i> <span><?php echo $row['skill_name'] ?></span>
                           </div>
                           <div class="infos">
                              <h2 class="title"><?php echo $row['title'] ?></h2>
                              <!-- <h3 class="company">Компания: <a href=""></a></h3> -->
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
                        <form method="post" action="show/index.php" id="show" style="display: none">
                           <input name="gig_id" value="<?php echo $row['id']?>">
                        </form>
                        <?php } ?>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      </div>
      <!-- partial -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.23/js/uikit.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.23/js/uikit-icons.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js'></script><script  src="./script.js"></script>
   </body>
</html>