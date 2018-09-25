<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Levensverwachtingcalculator">
    <meta name="author" content="C. Boomaars">

    <title>Levensverwachting Calculator</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz">
    <?php
    $stylesArr = array('flatly', 'journal', 'sketchy', 'slate', 'superhero');
    if (isset($_COOKIE['theme']) && in_array($_COOKIE['theme'], $stylesArr)) {
      $style = 'css/' . $_COOKIE['theme'] . '.min.css';
      $_SESSION['theme'] = $_COOKIE['theme'];
    } else {
      $style = 'css/sketchy.min.css';
      $_SESSION['theme'] = 'sketchy';
    }
    ?>
    <link rel="stylesheet" href="<?php echo $style; ?>">
    <link rel="stylesheet" href="css/site.css">
  </head>
  <body>  
    <!-- Navigatie -->
    <?php include('inc/nav.php'); ?>

  	<div class="container">