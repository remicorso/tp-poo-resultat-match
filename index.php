<?php

use \MonApp\Blog\ArticleMatch;

require('Article.php');
require('ArticleMatch.php');
require('db_connect.php');

$content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, sit. Error perspiciatis sunt iusto, soluta incidunt, dolorem consequuntur sit voluptates, recusandae placeat velit. Libero a maiores officia, incidunt quod exercitationem.';

$article1 = ArticleMatch::getInstance('Rémi Corso', 'Mon titre', 3, 0, 'Paris Saint-Germain', 'Real Madrid');
$article1->setContent($content);
$article1->setDateMatch('10 Octobre 2019');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $site_title ?> - Accueil</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

  <?php include('include/header.php') ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">

        <h1 class="my-4 text-center">Dernier Match
        </h1>

        <!-- Blog Post -->
        <div class="card ">
          <div class="card-body p-0">

            <div class="row d-flex justify-content-around">
              <div class="col-md-4 d-flex flex-column justify-content-center text-center">
                <?php echo $article1->getTeamA() ?>
                <img src="<?php echo $article1->getImageTeamA() ?>" class="teamImg" />
              </div>
              <div class="col-md-4  d-flex flex-column justify-content-center text-center">
                <i class="fas fa-gavel fa-4x"></i>

              </div>
              <div class="col-md-4  d-flex flex-column justify-content-center text-center">
                <?php echo $article1->getTeamB() ?>
                <img src="<?php echo $article1->getImageTeamB() ?>" class="teamImg" />
              </div>
            </div>






            <h3 class="text-center mt-4">Score Final</h3>
            <h5 class="text-center"><?php echo $article1->getScore() ?></h5>
            <h3 class="text-center">Résumé du Match</h3>
            <p class="text-center p-4"><?php echo $article1->getContent() ?></p>
          </div>
          <div class="card-footer">
            Validé le <?php echo $article1->getDateMatch() ?> par
            <a href="http://cv.rc-creation.fr"><?php echo $article1->getAuthor() ?></a>
          </div>
        </div>



      </div>



    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>