<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

        $apal  = 100;
        $botak = 0;
        $lodHP  = 200;
        $strela = rand(0,5);

      echo "0 Nákladu loď je bez nákladu a na Apalu je 100 nákladu. <br>";

  while ($botak < 100) {
    $botak = $botak + 10;
    $apal = $apal - 10;
    $lodHP =  $lodHP - 5*$strela;
    echo $botak . " nákladu je na Botaku. zbytek nákladu na Apalu : " . $apal . ".<br> A zbylé HP lodi je : " . $lodHP . ".<br>";
    if ($lodHP == 0) {
      echo "Loď zničena!! Náklad nebude dále převozován!";
      break;
    }

    if ($apal == 0) {
      echo "Na Apalu nezbývá žádný náklad.";
    }
  }
     ?>
  </body>
</html>
