<?php
include('components/header.php');
?>

<?php
require_once('scripts/db.config.php');
?>

<section>
    <div class="container-fluid carousel">
        <div class="row">
            <?php

            $stmt = $plug->prepare("SELECT * FROM carousel");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $carousel_images = $stmt->fetchAll(); ?>

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
                        echo '<img class="d-block image-fluid" width="100%" src="' . "gallery/" . $image['image_path'] . '" alt="' . $image['image_title'] . '">';
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
</section>


<section class="p">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 col-xl-5 order-1 order-md-0">
                <div class="row justify-content-start">
                    <div class="col-12 inner mb-4">
                        <h2 class="text-white font-weight-bold"> Welcome to Kingdom Life</h2>
                        <p class="text-white">
                            We are a community of believers dedicated to spreading the love and message of Jesus Christ. Our church is a place where everyone is welcome and we strive to create an atmosphere of acceptance, kindness, and support.
                            Our services are held every Sunday at 10am and include a mix of traditional and contemporary worship, as well as a relevant message from our pastor. We also offer a variety of small group Bible studies and fellowship opportunities throughout the week.
                            If you are new to our church, we invite you to come and check us out. Our doors are always open and we would love to have you join us in worship and fellowship.
                            For more information, please feel free to contact us or visit our Facebook page. We look forward to meeting you and growing in faith together.
                            <br>
                            Blessings,
                            <br>
                            Evangelism Team.
                        </p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-secondary py-2 px-4 font-weight-bold">GET IN TOUCH WITH US</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9 col-lg-5 mb-5 mb-lg-0 order-0 order-md-1">
                <div class="image text-right">
                    <img class="img-fluid" src="img/klm-HD.png" alt="Image">
                </div>
            </div>

        </div>
    </div>
</section>


<section class="welcome">
    <div class="container-fluid p-0 m-0">
        <div class="row">
            <div class="col-lg-12">
                <img src="img/bg.jpg" height="80px" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid p-0 m-0">
        <h2>Kingdom Blog</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card shadow">
                    <div class="card-body p-3">
                        <h4>Daily Nuggets</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in semper tellus. Donec a elit vel massa elementum malesuada. Mauris lacus lectus, aliquam quis ultricies ac, pretium in leo. Donec dictum, massa id luctus facilisis, diam est malesuada massa, ac scelerisque arcu tellus at est. Aliquam id neque sed justo faucibus ornare. Duis quis dictum dui. In scelerisque lacus in tortor pellentesque faucibus. Nulla rhoncus facilisis dui, in posuere diam. Nulla a tortor non metus dictum pharetra. Duis euismod, tortor ut rhoncus vehicula, lacus neque pulvinar lectus, et condimentum massa nulla id tortor. Curabitur a condimentum purus, eu viverra nisi. Morbi pellentesque scelerisque tellus, et laoreet nisl mollis in.</p>
                        <p>
                        <h6>Author:</h6>Sammy</p>
                        <a href="#" class="read-more">Read More</a>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card shadow">
                    <div class="card-body  p-3">
                        <h4>Post title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in semper tellus. Donec a elit vel massa elementum malesuada. Mauris lacus lectus, aliquam quis ultricies ac, pretium in leo. Donec dictum, massa id luctus facilisis, diam est malesuada massa, ac scelerisque arcu tellus at est. Aliquam id neque sed justo faucibus ornare. Duis quis dictum dui. In scelerisque lacus in tortor pellentesque faucibus. Nulla rhoncus facilisis dui, in posuere diam. Nulla a tortor non metus dictum pharetra. Duis euismod, tortor ut rhoncus vehicula, lacus neque pulvinar lectus, et condimentum massa nulla id tortor. Curabitur a condimentum purus, eu viverra nisi. Morbi pellentesque scelerisque tellus, et laoreet nisl mollis in.</p>
                        <p>
                        <h6>Author:</h6>Sammy</p>
                        <a href="#" class="read-more">Read More</a>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</section>
<?php
include('testimonials.php');
?>
<?php
include('components/footer.php');
?>