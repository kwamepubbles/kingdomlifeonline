<?php
include('components/header.php');
?>
<?php
require_once('scripts/db.config.php');
?>
<?php
include('components/carousel.php');
?>
<section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm about">
                <h2 class="font-weight-bold text-center me-auto"> Welcome to Kingdom Life</h2>
                <div class="col-lg-12 col-md-12 col-sm inner p-3 mb-3">
                    <p class="text-wrap me-auto">
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
                            <a href="#" class="btn btn-secondary font-weight-bold ">GET IN TOUCH WITH US</a>
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
<?php
include('testimonials.php');
include('events.php');
?>
<?php
include('components/footer.php');
?>