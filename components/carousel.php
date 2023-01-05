<div class="container-fluid-xl">
  <div class="row justify-content-center">
    <?php
    $stmt = $plug->prepare("SELECT * FROM carousel");
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $carousel_images = $stmt->fetchAll();
    ?>
    <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <?php
        $i = 0;
        foreach ($carousel_images as $image) {
          if ($i == 0) {
            echo '<li data-bs-target="#carouselIndicators" data-bs-slide-to="' . $i . '" class="active"></li>';
          } else {
            echo '<li data-bs-target="#carouselIndicators" data-bs-slide-to="' . $i . '"></li>';
          }
          $i++;
        }
        ?>
      </ol>
      <div class="carousel-inner">
        <?php
        $i = 0;
        foreach ($carousel_images as $image) {
          if ($i == 0) {
            echo '<div class="carousel-item active">';
          } else {
            echo '<div class="carousel-item">';
          }
          echo '<img class="d-block image-fluid" width="100%" height="400px" src="' . "gallery/" . $image['image_path'] . '" alt="' . $image['image_title'] . '">';
          echo '</div>';
          $i++;
        }
        ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>