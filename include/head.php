<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <link rel="stylesheet" href="css/custom.css">
  <title>
    <?php
    if(!empty($titre_page)){
      echo $titre_page;
    }
    else{
      echo 'Pierre, Feuille, Ciseaux';
    }
    ?>
  </title>
</head>
