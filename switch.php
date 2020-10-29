<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php switch</title>
</head>

<body>
    <?php 
$age = array("15","17","20","25","30");

 switch($age[array_rand($age)]){
      case  15:
        echo "you are too young to enter this game!";
      break;
      case 17:
        echo "you are almost allowed to play. try again in 1year !";
      break; 
      case 20:
        echo "you are allowed to play this game,press enter to continue!";
    break;
      case 25:
        echo "Hey  you are now old enough to be playing this game switch to pro!";
    break;
        case 30:
        echo "Woow welcome to pro game!";
    break;
    break;
      default:
        echo "error occurred!";
 }
 ?>








</body>

</html>