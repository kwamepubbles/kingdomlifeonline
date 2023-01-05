<?php
include('components/header.php');
?>
<?php
require_once('scripts/db.config.php');
?>
<section>
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
                        echo '<img class="d-block image-fluid" width="100%" height="500px" src="' . "gallery/" . $image['image_path'] . '" alt="' . $image['image_title'] . '">';
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
</section>
<section class="p">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg col-md col-sm">
                <div class="row justify-content-center">
                    <h2 class="text-white font-weight-bold text-center pt-4"> Welcome to Kingdom Life</h2>
                    <div class="col- inner mb-4">
                        <p class="text-white text-wrap">
                            We are a community of believers dedicated to spreading the love and message of Jesus Christ. We strive to create an atmosphere of acceptance, kindness, and support.
                            Our fellowship acivities include a mix of traditional and contemporary worship, prophetic ministrations as well as expounding of scripture. We also offer a variety of small group Bible studies and prayer partnerships.
                            If you are new to KINGDOM LIFE, we invite you to come and check us out. Our doors are always open and we would love to have you join us in worship and fellowship.
                            For more information, please feel free to contact us or visit our social media platforms. We look forward to meeting you and growing in faith together.
                            <br>
                            <br>
                            Blessings,
                            <br>
                            Evangelism Team.
                        </p>
                        <div class="row justify-content-center pt-4">
                            <div class="col-6 inner">
                                <a href="#" class="btn btn-secondary font-weight-bold shadow">GET IN TOUCH WITH US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md col-sm">
                <div class="row justify-content-center">
                    <div class="col-6 p-4">
                        <img class="d-block img-fluid" width="100%" src="img/klm-HD.png" alt="Image">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="welcome">
    <div class="container-fluid p-4 m-0">
        <div class="row justify-content-start">
            <div class="col-6 inner p-2 mt-2">
                <img src="img/sots.jpg" width="70%" height="50px" class="img-fluid" alt="...">
            </div>
            <div class="col-4 inner pt-2">
                <h2>SCHOOL OF THE SPIRIT</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam dignissimos voluptate aperiam sit cupiditate similique ut sapiente repellendus alias dolore, nobis iusto, sed impedit odit nisi in nostrum ipsa sint!</p>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-6 inner p-4 m-0">
                <h2>SOLUTION NIGHT</h2>
                <p class="text-wrap">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam dignissimos voluptate aperiam sit cupiditate similique ut sapiente repellendus alias dolore, nobis iusto, sed impedit odit nisi in nostrum ipsa sint!</p>
            </div>
            <div class="col-6 inner p-2 mt-2">
                <img src="img/sn.jpg" width="70%" height="50px" class="img-fluid" alt="...">
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
                <div class="shadow">
                    <div class="border p-3">
                        <h4 class="text-center text-bg-dark p-2">Daily Nuggets</h4>
                        <i src="img/megaphone-512.png" alt=""></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in semper tellus. Donec a elit vel massa elementum malesuada. Mauris lacus lectus, aliquam quis ultricies ac, pretium in leo. Donec dictum, massa id luctus facilisis, diam est malesuada massa, ac scelerisque arcu tellus at est. Aliquam id neque sed justo faucibus ornare. Duis quis dictum dui. In scelerisque lacus in tortor pellentesque faucibus. Nulla rhoncus facilisis dui, in posuere diam. Nulla a tortor non metus dictum pharetra. Duis euismod, tortor ut rhoncus vehicula, lacus neque pulvinar lectus, et condimentum massa nulla id tortor. Curabitur a condimentum purus, eu viverra nisi. Morbi pellentesque scelerisque tellus, et laoreet nisl mollis in.</p>
                        <p>
                        <h6>Author:</h6>Sammy</p>
                        <a href="#" class="read-more">Read More</a>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="shadow">
                    <div class="border  p-3">
                        <h4 class="text-center text-bg-dark p-2">Post title</h4>
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
include('events.php');
?>
<?php
include('components/footer.php');
?>