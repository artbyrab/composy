<?php
require ('../vendor/autoload.php');

use artbyrab\composy\Composy;

$composy = new Composy();
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Composy</title>
    <meta name="description" content="Composy">
    <meta name="author" content="artbyrab">

    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <img style="width:200px; padding:20px 0px;" src="../files/graphics/composy-dark-plain-large-logo.png">
            <hr>
            <h1><?php echo $composy->getTitle(); ?></h1>
            <p><?php echo $composy->getDescription(); ?></p>
            </div><!--/.col-->
        </div><!--/.row-->
    </div><!--/.container-->
</body>
</html>