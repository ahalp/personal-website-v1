<?php require_once(CONTROLLER . 'helpers.php') ?>


<!DOCTYPE html>
<html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" href="<?php echo BASE_URL . 'css/dplaha.css' ?>">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,900,400italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="/favicon.gif" />
     <title> <?php echo htmlspecialchars($title) ?> </title>

     <meta name="description=" content="A collection of personal projects by Deepkanwal Plaha.">

    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-43087523-1');
    ga('send', 'pageview');

    </script>
    <!-- End Google Analytics -->
     
  </head>

  <body>
    <div class="wrapper">
      <div>
        <h1 class="main-title"> deepkanwal plaha </h1>
      </div>

      <div class="navbar">
        <ul>
          <li><a class="fade-transition" href="<?php echo BASE_URL ?>">projects</a></li>
          <li>|</li>
          <li><a class="fade-transition" href="<?php echo BASE_URL . PAGE_ABOUT ?>">about</a></li>
        </ul>
      </div>

      <!-- <h2 class="page-title"> <?php echo htmlspecialchars($title) ?> </h2> -->
      <div class="bottom"> </div>
      <div class="content-wrapper">


