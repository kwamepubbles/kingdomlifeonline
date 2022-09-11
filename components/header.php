<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kingdom Life International</title>
    <link rel="icon" href="img/klm-cl.png">
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <script src="https://kit.fontawesome.com/e786ff1a22.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark shadow normal" style="background-color: #420075;">
        <a class="navbar-brand"href="index.php"><img src="./img/klm-HD.png" class="d-block rounded-circle"></a><a class="navbar-brand" href="index.php" style="font-size:11px;">KINGDOM LIFE INTERNATIONAL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true"><i class="fas fa-church"></i> Ministrations</a>
                    <ul class="dropdown-menu" href="#" style="background-color: #CB8AFF;">
                        <li><a class="dropdown-item text-uppercase" href="school.php"><i class="fas fa-graduation-cap"></i> School of the Spirit</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-uppercase" href="command.php"><i class="fas fa-praying-hands"></i> Commanding The Month</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-uppercase" href="allnight.php"><i class="fas fa-moon"></i> All-Nights</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="missions.php" role="button"><i class="fas fa-bullhorn"></i> Missions</a></li>
                <li class="nav-item"><a class="nav-link" href="podcast.php" role="button"><i class="fas fa-podcast"></i> Podcasts</a></li>
                <li class="nav-item"><a class="nav-link" href="support.php" role="button"><i class="fas fa-donate"></i> Support</a></li>
                <li class="nav-item"><a class="nav-link" href="library.php" role="button"><i class="fas fa-book-reader"></i> Library</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php" role="button"><i class="fas fa-globe"></i> About</a></li>
            </ul>
        </div>
    </nav>

