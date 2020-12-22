<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    body{
      background: purple;
    }
  </style>

</head>


<body>

  <!-- Passare come parametri GET name, mail e age e verificare 
  (cercando i metodi che non conosciamo nella documentazione)
  che:
  1. name sia più lungo di 3 carratteri,
  2. che mail contenga un punto e una chiocciola
  3. e che age sia un numero.
  Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato -->

  <!-- variabili -->
  <?php
    $getName = $_GET['name'];
    $getMail = $_GET['mail'];
    $getAge = $_GET['age']
  ?>

  <!-- operazioni di controllo -->
  <?php
    $controlChar = strlen($getName); 
    $controlAt = strpos($getMail, '@');
    $controlDot = strpos($getMail, '.');
    $controlNum = is_numeric($getAge);
  ?>

  <!-- output -->
  <h1>

    <?php
      if ($controlChar > 3 && $controlAt !== false && $controlDot !==false && $controlNum == 1){
        echo "Accesso riuscito";
      } 
      else {
        echo "Accesso negato";
      }
    ?>

  </h1>

  
</body>
</html>