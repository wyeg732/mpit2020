<?php 

session_start();
$connect = mysqli_connect("127.0.0.1", "root", "Starkova24", "vhelp"); 

$skill_name = "";
$skill_icon = "";

switch ($_POST["skills"]) {
    case "skill1":
        $skill_name = "Исследовательская работа";
        $skill_icon = 'fa-microscope';
        break;
    case "skill2":
        $skill_name = "Стажировка";
        $skill_icon = 'fa-business-time';
        break;
    case "skill3":
        $skill_name = "Письмо и редактирование";
        $skill_icon = 'fa-pen-nib';
        break;
    case "skill4":
        $skill_name = "Разработка";
        $skill_icon = 'fa-file-code';
        break;
    case "skill5":
        $skill_name = "Перевод текстов";
        $skill_icon = 'fa-language';
        break;
    case "skill6":
        $skill_name = "Преподавание и обучение";
        $skill_icon = 'fa-chalkboard-teacher';
        break;
    case "skill7":
        $skill_name = "Дизайн и рисунок";
        $skill_icon = 'fa-palette';
        break;
    case "skill8":
        $skill_name = "Волонтерство";
        $skill_icon = 'fa-hands-helping';
        break;
    case "skill9":
        $skill_name = "Лидерство";
        $skill_icon = 'fa-award';
        break;

      }



$query = mysqli_query($connect, 
  "INSERT INTO gigs
  (orgs_id, title, todo, motivation, reqs, skill_name, skill_icon, skill_id, hours, seats, remote_work) 

  VALUES ('" . $_SESSION["id"] . "', 
      '" . $_POST['title'] . "', 
      '" . $_POST['todo'] . "', 
      '" . $_POST['motivation'] . "', 
      '" . $_POST['reqs'] . "',
      '" . $skill_name . "',
      '" . $skill_icon . "',
      '" . $_POST['skills'] . "',
      '" . $_POST['hours'] . "',
      '" . $_POST['seats'] . "',
      '" . $_POST['remote_work'] . "'

       )");

header('location: http://localhost/vhelp/admin/index.php');
 ?>
