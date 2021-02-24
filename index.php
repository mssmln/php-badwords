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
    $about = $_GET['badword'];
    echo "'$string'"; ?>
    is <?php echo strlen($string); ?> characters long.
  </p>

  <?php var_dump($string); ?>
  <br>
  <?php var_dump($_GET); ?>




  <!-- <h1>Ciao il mio nome è <?php
    $nome = $_GET['name'];
    echo $nome;
    echo $_GET['eta']; ?>
  </h1>
  <h2><?php echo $_GET['eta']?></h2>

<?php var_dump($_GET); ?> -->
</body>
</html>
