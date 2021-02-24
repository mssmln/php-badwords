<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->

<?php
  $string = 'I am about to phase in my first php program';
  // $badword = $_GET['about'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <!-- php -->

  <p>
    the string <?php
    // puoi commentare all'interno dei tag php e non si vedranno nel inspector usando il // or
    # hashtag or
    /* come nel css */
    echo $string; // stampiamo a video la stringa
    $badword = $_GET['badword']; // ci salviamo il valore dalla chiave badword digitando nel url badword=sth , il sth sarà il valore di $badword
    // echo strpos($string, $badword);
    //col medoto str_replace sostituiamo il valore $badword con *** dalla $string e salviamo il tutto in $fraseCensurata
    $fraseCensurata = str_replace($badword,'***',$string);
    ?>

    is <?php
    # metodo per conoscere la lunghezza della stringa
    echo strlen($string); ?> characters long.
  </p>
  <p>
    <?php echo $fraseCensurata; // la stampiamo a video ?>
    ---> Dopo la censura  la lunghezza è
    <?php echo strlen($fraseCensurata); ?>
  </p>

  <?php
  # stampa a video l'array Get
  // var_dump($_GET); ?>





</body>
</html>
