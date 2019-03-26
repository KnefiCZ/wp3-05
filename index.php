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

         do {
           $apal  = $apal - 10;
           echo "Na Apalu je: " . $apal . " nákladu. ";
           for ($i=0; $i < 5 ; $i++) {
             $strela= rand(0,10);
             $lodHP = $lodHP - $strela;
               }
               if ($lodHP <= 0) {
                     echo "<br>Loď je zničena, nebude dál převážet!";
                      break;
                }
              $botak = $botak + 10;
              echo $botak . " nákladu je na Botaku.";

              echo  "<br> A zbylé HP lodi je : " . $lodHP . "<br>";

               if ($apal == 0) {
                    echo "Na Apalu nezbývá žádný náklad.";
               }
              }
        while ($botak < 100)
     ?>
     <?php echo "<br>Na botaku zbylo: " . $botak; ?>
  </body>
</html>
