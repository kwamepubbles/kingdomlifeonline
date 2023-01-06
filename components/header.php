<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kingdom Life International</title>
  <link rel="icon" href="img/klm-cl.png">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/e786ff1a22.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-lg shadow">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="./img/klm-HD.png" width="30" height="24" class="d-inline-block align-text-center rounded-circle"></a>
      <p>KINGDOM LIFE</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <i class="bi bi-house"></i>
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <i class="bi bi-headphones"></i>
            <a class="nav-link" href="podcast.php">Podcast</a>
          </li>
          <li class="nav-item">
            <i class="fas fa-camera"></i>
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <i class="bi bi-book"></i>
            <a class="nav-link" href="library.php">Library</a>
          </li>
          <li class="nav-item">
            <i class="fas fa-praying-hands"></i>
            <a class="nav-link" href="pray.php">Pray</a>
          </li>
          <li class="nav-item">
            <i class="fas fa-seedling"></i>
            <a class="nav-link" href="support.php">Seeds & Offering</a>
          </li>
        </ul>
        <nav class="navbar ms-auto">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <i class="fas fa-fax"></i>
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </nav>
  <main>