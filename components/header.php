<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kingdom Life International</title>
  <link rel="icon" href="img/klm-cl.png">
  <link href="assets/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/fontawesome6/css/fontawesome.css" rel="stylesheet">
  <link href="assets/fontawesome6/css/brands.css" rel="stylesheet">
  <link href="assets/fontawesome6/css/solid.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <!------ Include the above in your HEAD tag ---------->
</head>

<body>
  <?php
  include('./scripts/db.config.php');
  ?>
  <nav class="navbar navbar-expand-md navbar-expand-lg" style="background-color: #6f07b4;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="./img/klm-HD-icon.png" class="rounded-circle"></a>
      <p class="text-white p-0 m-auto">KINGDOM LIFE</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="justify-content-center m-auto">
          <ul class="navbar-nav list-unstyled">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php"><i class="bi bi-house me-1"></i>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="podcast.php"><i class="bi bi-headphones me-1"></i>Podcast</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php"><i class="fas fa-camera me-1"></i>Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="library.php"><i class="bi bi-book me-1"></i>Library</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php"><i class="fa-solid fa-blog me-1"></i>Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pray.php"><i class="fa fa-praying-hands me-1"></i>Pray</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="support.php"><i class="fa regular fa-donate me-1"></i>Give</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><i class="fa regular fa-suitcase me-1"></i>About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>