<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>figuritas y franciscos</title>
    <link rel="stylesheet" href="figuritas.css">
  </head>
  <body>

    <h4>Figura 1 (sencilla)</h4>
    <?php
      $i=1;
      while ($i <= 5) {
        echo "*";
        echo "<br>";
        $i++;
      }
    ?>


    <h4>Figura 2 (sencilla 2)</h4>
    <?php
      $figura2="* * * * *";
      for ($i=1; $i <= 5 ; $i++) {
          for ($cambio=$i; $cambio <= $i ; $cambio++) {
      }
        echo "$figura2";
        echo "<br>";
    }
    ?>


    <h4>Figura 3 (sencilla 3)</h4>
    <?php
      $figura3=7;

      for ($i=1; $i <= $figura3; $i++) {
        for ($asteriscos=1; $asteriscos <= $i ;$asteriscos++)
          echo '*';
            echo '<br>';
      }
    ?>



    <h4>Figura 4 (media)</h4>
    <?php
    $figura4=5;

    for ($i=1; $i <= $figura4 ; $i++) {
      for ($asteriscos=1; $asteriscos <= $i ; $asteriscos++) {
        if (($i%2) == 1) {
            echo '*';
        }
      }
          echo '<br>';
      }
      echo "<br>";
      // sacamos la parte de abajo de la figura copiando el for que hemos utilizado arriba pero cambiando variables
      $figura4Reverso=0;
      for ($r=3; $r >= $figura4Reverso ; $r--) {
        for ($asteriscos=1; $asteriscos <= $r ; $asteriscos++) {
          if (($r%2) == 1) {
              echo '*';
          }
        }
            echo '<br>';
        }
     ?>




     <h4>figura 5 (esta si q si)</h4>
     <div class="figuritas">


     <?php
     $figura4=10;
     for ($i=1; $i <= $figura4 ; $i++) {
       for ($asteriscos=1; $asteriscos <= $i ; $asteriscos++) {
         if (($i%2) == 1) {
             echo '*';
         }
       }
           echo '<br>';
       }
       echo "<br>";



      ?>
</div>
  </body>
</html>
