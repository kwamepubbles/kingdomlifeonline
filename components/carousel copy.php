<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php
    $query = $plug->prepare("SELECT * FROM slider WHERE status = 1 ORDER BY id");
    $query->execute();
    while($row = $query->fetchObject()){?>
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $row->dir.$row->fileName;?>" alt="<?php echo $row->title?>">
    </div>
    <?php } ?>
  </div>
</div>

// Connect to the database
$db = new PDO("mysql:host=localhost;dbname=mydatabase", "username", "password");

// Set up the SQL statement to insert the image data into the carousel table
$sql = "INSERT INTO carousel (image_path, image_title, image_description) VALUES (?, ?, ?)";

// Prepare the statement
$stmt = $db->prepare($sql);

// Bind the values to the placeholder parameters
$stmt->bindValue(1, $image_path);
$stmt->bindValue(2, $image_title);
$stmt->bindValue(3, $image_description);

// Execute the statement
$stmt->execute();

// Close the database connection
$db = null;


<!--<div class="container-fluid">
  <div class="row">
    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
        <li data-target="#carouselIndicators" data-slide-to="3"></li>
        <li data-target="#carouselIndicators" data-slide-to="4"></li>
        <li data-target="#carouselIndicators" data-slide-to="5"></li>
        <li data-target="#carouselIndicators" data-slide-to="6"></li>
        <li data-target="#carouselIndicators" data-slide-to="7"></li>
        <li data-target="#carouselIndicators" data-slide-to="8"></li>
        <li data-target="#carouselIndicators" data-slide-to="9"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block" src="img/123jj.jpg" class="img-fluid" width="100%">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="img/2.jpeg" class="img-fluid" width="100%">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="img/3.jpeg" class="img-fluid" width="100%">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="img/4.jpeg" class="img-fluid" width="100%">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="img/6.jpeg" class="img-fluid" width="100%">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="img/7.jpeg" class="img-fluid" width="100%">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="img/8.jpeg" class="img-fluid" width="100%">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="img/5.jpeg" class="img-fluid" width="100%">
        </div>
    </div>

      <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  
  </div>
</div>-->