<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

        $apal   = 100;
        $botak  = 0;
        $lodHP  = 200;

         echo "0 Nákladu loď je bez nákladu a na Apalu je 100 nákladu. <br>";

        while ($botak < 100) {
          $apal  = $apal - 10;
          for ($i=0; $i < 5 ; $i++) {
            $strela= rand(0,7);
            $lodHP = $lodHP - $strela;
          }
          if ($lodHP <= 0) {
            echo "Loď je zničena, nebude dál převážet!";
            break;
          }
            $botak = $botak + 10;

          echo $botak . " nákladu je na Botaku. zbytek nákladu na Apalu : " . $apal . ".<br> A zbylé HP lodi je : " . $lodHP . ".<br>";



        if ($apal == 0) {
          echo "Na Apalu nezbývá žádný náklad.";
        }

      }
     ?>
  </body>
</html>
