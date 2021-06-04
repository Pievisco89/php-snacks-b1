<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>
  
  <h1>Snack 2</h1>

  <?php

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];


    if(empty($name) || empty($mail) || empty($age)){
      
      $string = "Errore: dati non inseriti";
    
    }else if(strlen($name) < 3){

      $string = "Errore: inserire un nome di almeno 3 lettere";
    
    }else if(strpos($mail, "@") === false || strpos($mail, ".") === false){

      $string = "Errore: indirizzo email non valido";

    } else if(!is_numeric($age)){

      $string = "Errore: inserisci un numero";

    } else {

      $string = "Accesso riuscito";

    }

    echo $string;

  ?>



</body>
</html>