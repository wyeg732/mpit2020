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
          html{
            background-color: black;
         }
         .action{
         background-color: black;
         padding: 50px 0;
         }
         .skills_block{
         margin-top: -40px;
         }
         .title_2{
         margin-bottom: 40px;
         }
         .actions_container{
         width: 100%;
         text-align: center;
         display: flex;
         }
         .actions_container .action_item{
         width: 80%;
         margin-right: 50px;
         background-color: white;
         padding: 50px;
         border-radius: 10px;
         transition: all .4s ease-in-out;
         }
         .actions_container .action_item:first-child{
         margin-left: 50px;
         }
         .actions_container a{
         color: black;
         text-decoration: none;
         display: block;
         text-align: center;
         }
         .action_item:hover{
         transform: scale(1.05);
         cursor: pointer;
         }
         .action_item h2{
         font-weight: 900;
         }
         .action_item p{
         height: 100px;
         }
         .action_item a{
         background-image: linear-gradient(to right, #29323c, #485563, #2b5876, #4e4376);
         background-size: 300% 100%;
         width: 200px;
         padding: 20px;
         color: white
         }
         .action_item a:hover{
         background-position: 100% 0;
         moz-transition: all .4s ease-in-out;
         -o-transition: all .4s ease-in-out;
         -webkit-transition: all .4s ease-in-out;
         transition: all .4s ease-in-out;
         }
         .navbar_ a{
         color: white
         }
         .fake_button{
         text-align: justify;
         background:none;
         border:none;
         }
         .fake_button:hover{
         color: #03b1fc;
         }

         @media only screen and (max-width: 1100px) {
         .actions_container{
            display: block;
            width: 600px;
            margin: auto;
         }
         .action_item{
            margin-bottom: 50px;
         }
         }
         
      </style>
   </head>
   <body>
      <div class="banner">
         <h1>ИЗМЕНИ МИР</h1>
         <section>
            <div class="welcome">
               <ul class="letters hidden">
                  <li>П</li>
                  <li>Р</li>
                  <li>Я</li>
                  <li>М</li>
                  <li>О</li>
                  <br>
                  <li>С</li>
                  <li>Е</li>
                  <li>Й</li>
                  <li>Ч</li>
                  <li>А</li>
                  <li>С</li>
               </ul>
            </div>
         </section>
         <div class="navbar_">
            <div>
               <p><a href="index.php">главная</a></p>
            </div>
            <div>
               <p><a href="#skills">навыки</a></p>
            </div>
            <div>
               <p><a href="#jobs">работы</a></p>
            </div>
            <div>
               <p><?php if (isset($_SESSION['id'])) {
                 echo '<a href="session_kill.php">выйти</a>';
               }else{
                  echo '<a href="#join">начать</a>';
               } ?></p>
            </div>
         </div>
      </div>
      <div class="stats">
         <h5 class="title_1">Сделай позитивные изменения в мире</h5>
         <p class="title_2">Организации и волонтеры, работающие вместе для мира и развития</p>
         <div class="contain">
            <div class="carousel">
               <div class="row__inner">
                  <div class="tile">
                     <div class="tile__media">
                        <img class="tile__img" src="https://acc.libfl.ru/wp-content/uploads/2018/10/o-students-volunteering-facebook1-1024x512.jpg" alt=""  />
                     </div>
                     <div class="tile__details">
                        <div class="tile__title">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                     </div>
                  </div>
                  <div class="tile">
                     <div class="tile__media">
                        <img class="tile__img" src="https://specials-images.forbesimg.com/imageserve/5e8ce8f201879f000703f3c3/960x0.jpg?cropX1=0&cropX2=7952&cropY1=297&cropY2=4772" alt=""  />
                     </div>
                     <div class="tile__details">
                        <div class="tile__title">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                     </div>
                  </div>
                  <div class="tile">
                     <div class="tile__media">
                        <img class="tile__img" src="https://studyinrussia.ru/images/pages/static/visa-1.jpg" alt=""  />
                     </div>
                     <div class="tile__details">
                        <div class="tile__title">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                     </div>
                  </div>
                  <div class="tile">
                     <div class="tile__media">
                        <img class="tile__img" src="https://lh5.googleusercontent.com/proxy/P_4yt7WGaCdOPC7AuluYdecIpMCM9EQ6J7EuobUdEoy0UIya0qPIfEQ4bDekKOV2785iVanFexu78eTEcyDdVlrgdIk_jV16HEmXzg0Rnv4ze1Ge318HSXt8yiXFCTm7Udo2Sc8r3H9SPVEIdxHU7g" alt=""  />
                     </div>
                     <div class="tile__details">
                        <div class="tile__title">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                     </div>
                  </div>
                  <div class="tile">
                     <div class="tile__media">
                        <img class="tile__img" src="https://i.ytimg.com/vi/mxY1OEaKRCY/maxresdefault.jpg" alt=""  />
                     </div>
                     <div class="tile__details">
                        <div class="tile__title">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                     </div>
                  </div>
                  <div class="tile">
                     <div class="tile__media">
                        <img class="tile__img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdt602p2cHFIKrs0vZvwm-Sjd8mQarSD-JxzOlliQBsAk9wTi2Kg&s" alt=""  />
                     </div>
                     <div class="tile__details">
                        <div class="tile__title">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                     </div>
                  </div>
                  <div class="tile">
                     <div class="tile__media">
                        <img class="tile__img" src="https://lh4.googleusercontent.com/proxy/50mk-ggX9PY20eRZcKU8gxJrWCCzjc58RRAHVYaDGuxdb8CpivCruH024D_5Mg2Zo2QaE6jM3UaD7lLYPbYaZJ6cDmzQPt36nKGzgKJHtA7SYgYoB6PObYdoGfQP46CjRQy__hTOpgM" alt=""  />
                     </div>
                     <div class="tile__details">
                        <div class="tile__title">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                     </div>
                  </div>
                  <a name="skills"></a> 
               </div>
            </div>
         </div>
      </div>
      <div class="skills_">
         <h5 class="title_1">Ввод навыков в действие</h5>
         <p class="title_2">So many ways to volunteer</p>
         <div class="skills_block">
            <div class="flex">
               <div class="circle skill1">
                  <i class="fas fa-microscope "></i>
                  <p>Научное исследование</p>
               </div>
               <div class="circle skill2">
                  <i class="fas fa-business-time"></i>
                  <p>Стажировка</p>
               </div>
               <div class="circle skill3">
                  <i class="fas fa-pen-nib"></i>
                  <p>Письмо и редактирование</p>
               </div>
            </div>
            <div class="flex">
               <div class="circle skill4">
                  <i class="fas fa-file-code"></i>
                  <p>Разработка</p>
               </div>
               <div class="circle skill5">
                  <i class="fas fa-language"></i>
                  <p>Перевод текстов</p>
               </div>
               <div class="circle skill6">
                  <i class="fas fa-chalkboard-teacher"></i>
                  <p>Преподавание и обучение</p>
               </div>
            </div>
            <div class="flex">
               <div class="circle skill7">
                  <i class="fas fa-palette"></i>
                  <p>Дизайн и рисунок</p>
               </div>
               <div class="circle skill8">
                  <i class="fas fa-hands-helping"></i>
                  <p>Волонтерство</p>
               </div>
               <div class="circle skill9">
                  <i class="fas fa-award"></i>
                  <p>Лидерство</p>
               </div>
            </div>
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
      </div>
      <h5 class="title_1">Почему ждешь?</h5>
      <p class="title_2">Зарегистрируйся сейчас</p>
      <a name="join"></a> 
      <div class="action">
         <div class="actions_container">
            <a href="user_register/index.php">
               <div class="action_item">
                  <div class="get_started_item">
                     <h2>Найди возможности</h2>
                     <p>Компьютер, телефон или планшет - станьте волонтером из любой точки мира, где бы вы ни находились ...</p>
                     <img src="https://www.onlinevolunteering.org/sites/default/files/devices.svg" alt="    Find opportunities">
                     <!-- <a href="user_register/index.php">Зарегистрироваться как участник</a> -->
                  </div>
               </div>
            </a>
            <a href="company_register/index.php">
               <div class="action_item">
                  <div class="get_started_item">
                     <h2>Найди волонтеров</h2>
                     <p>Зарегистрируйте свою организацию. Опубликовать возможности для волонтеров здесь ...</p>
                     <img src="https://www.onlinevolunteering.org/sites/default/files/fund_vol.svg" alt="    Find volunteers">
                     <!-- <a href="company_register/index.php">Зарегистроваться как организация</a> -->
                  </div>
               </div>
         </div>
         </a>
      </div>
      <script type="text/javascript">
         // $(".card_").click(function(){
         //   $("#show").submit()
         // });
         
         
                  $(function() {
               $('body').hide().fadeIn(1000);
               $('section:nth-child(3)').addClass('opacity')
               $('section:nth-child(4)').css({'opacity':0})
               $('section:nth-child(4) img').addClass('hideImg')
               $('section:nth-child(4) p').addClass('hideP')
               $('section:nth-child(5)').mousemove(function(event){
               $('.fly').offset({'left': event.pageX -20 , 'top': event.pageY - 20})
               });
         
         
           setInterval(function() {
             var top = $(window).scrollTop();
             if (top < 150) {
               $('.letters').removeClass('hidden');
             }
           }, 600)
         
         
           $(window).on("scroll", function() {
                var top = $(window).scrollTop();
             if (top > 150) {
               $('.letters').addClass('hidden')
             } else {
               $('.letters').removeClass('hidden')
             }
         
           });
         })
               
      </script>
   </body>
</html>
