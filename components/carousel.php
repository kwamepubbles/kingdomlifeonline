<?php 
include('scripts/db.config.php');

 try 
 {
    $query = $plug->prepare("SELECT * FROM slider_img ORDER BY `id` ASC;");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $result){    
        $id = $result['id'];
        $img_path = $result['img_path'];
        var_dump($id);
    }
  } 
  catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
   }
?>

<div class="container-fluid">
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
</div>