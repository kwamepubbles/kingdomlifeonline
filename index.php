<?php
include('components/header.php');
?>
<?php
require_once('scripts/db.config.php');
?>
<?php
include('components/carousel.php');
?>
<section class="about">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm">
                <h2 class="text-white font-weight-bold text-center me-auto"> Welcome to Kingdom Life</h2>
                <div class="col-lg-12 col-md-12 col-sm inner p-3 mb-3">
                    <p class="text-white text-wrap me-auto">
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
                    <div class="row justify-content-center">
                        <div class="col-8 pb-3 m-2">
                            <a href="#" class="btn btn-secondary font-weight-bold shadow">GET IN TOUCH WITH US</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm">
                <div class="justify-content-center">
                    <img class="d-block img-fluid" width="70%" src="img/klm-HD.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row justify-content-start">
            <div class="col-6 inner p-2 mt-2">
                <img src="img/sots.jpg" width="70%" height="50px" class="img-fluid" alt="...">
            </div>
            <div class="col-4 inner p-2">
                <h2>SCHOOL OF THE SPIRIT</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam dignissimos voluptate aperiam sit cupiditate similique ut sapiente repellendus alias dolore, nobis iusto, sed impedit odit nisi in nostrum ipsa sint!</p>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-4 inner p-2 ">
                <h2>SOLUTION NIGHT</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam dignissimos voluptate aperiam sit cupiditate similique ut sapiente repellendus alias dolore, nobis iusto, sed impedit odit nisi in nostrum ipsa sint!</p>
            </div>
            <div class="col-6 inner p-2 mt-2">
                <img src="img/sn.jpg" width="70%" height="50px" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <h2>Kingdom Blog</h2>
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
            <div class="col-sm-6 hstack gap-3">
                <?php
                try {

                    $stmt = $plug->prepare("SELECT * FROM posts ORDER BY date DESC");
                    $stmt->execute();
                    $posts = $stmt->fetchAll();

                    foreach ($posts as $post) {
                        echo '<div class="border p-3 mb-3 shadow">';
                        echo '<h4 class="text-center text-bg-dark p-2">' . $post['title'] . '</h4>';
                        echo '<p>' . $post['body'] . '</p>';
                        echo '<p>' . $post['author'] . '</p>';
                        echo '<p class="card-text"><small class="text-muted"> Posted on ' . $post['date'] . '</small></p>';
                        echo '</div>';
                    }
                } catch (PDOException $e) {
                    exit("Error: " . $e->getMessage());
                }
                ?>
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