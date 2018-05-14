<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo PHP</title>
  </head>
  <body>

    <?php

      // Exercice 1
      $nom="Pascal";
      echo "$nom </br></br>";

      // Exercice 2
      $nom="Ruer";
      $prenom="Pascal";
      $age=42;
      $prenom .= ' '. $nom .=' '. $age;
      echo "$prenom </br></br>";

      // Exercice 3
      $km=1;
      $kma=3;
      $kmb=125;
      $km .=' '. $kma .=' '. $kmb;
      echo "$km </br></br>";

      // Exercice 4
      $str="String";
      $in=3;
      $fl=1.12;
      $bo=true;
      $str .=' '. $in .=' '. $fl .=' ' .$bo;
      echo "$str </br></br>";

      // Exercice 5
      $in="";
      echo "$in </br>";
      $in=3;
      echo "$in </br></br>";

      // Exercice 6
      $name="Pascal";
      echo "Bonjour " ."$name:" ." comment vas tu? </br></br>";

      // Exercice 7
      $nom="Ruer";
      $prenom="Pascal";
      $age=42;
      $prenom .= ' '. $nom;
      echo "Bonjour " ."$prenom" ." tu as: " ."$age" ."ans</br></br>";

      // Exercice 8
      $a=3 + 4;
      $b=5 * 20;
      $c=45 / 5;
      echo "$a" .' ' ."$b" .' ' ."$c";
           ?>



  </body>
</html>
