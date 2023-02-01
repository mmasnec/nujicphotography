<?php 

print '
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="Robert Nujić, photographer, photography, landscape photography">
    <meta name="author" content="Martin Masnec">

    <title>Robert Nujić Photography</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lightbox.min.css">
  </head>
  <header>
    <div class="hero-image"></div>
  </header>
  <body class="bg-brown">
  ';
  include("menu.php");



		
  # Homepage
  if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("home.php"); }
  
  # News
  else if ($_GET['menu'] == 2) { include("portfolio.php"); }
  
  # Contact
  else if ($_GET['menu'] == 3) { include("contact.php"); }
  
  # About me
  else if ($_GET['menu'] == 4) { include("aboutme.php"); }



print '
<footer class="footer container text-center text-muted">

<img src="img/signature-white.png" class="img-fluid ft-img">
<p style="color:white;">Robert Nujić Photography &copy; 2023</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="lightbox-plus-jquery.min.js"></script>
</body>
</html>
';
  ?>