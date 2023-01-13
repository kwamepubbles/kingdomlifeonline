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
    <div class="container mt-4">
        <h2 class="font-weight-bold m-auto "> Our Programs</h2>
        <div class="row justify-content-center pt-4">
            <div class="col-sm-12 col-md-6 col-lg-6 m-auto">
                <a href="#!"><img src="img/sots.jpg" class="d-block w-50 h-auto m-auto p-3" alt="..."></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 m-auto">
                <h3 class="text-center">SCHOOL OF THE SPIRIT</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam dignissimos voluptate aperiam sit cupiditate similique ut sapiente repellendus alias dolore, nobis iusto, sed impedit odit nisi in nostrum ipsa sint!</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-6 m-auto">
                <h3 class="text-center">SOLUTION NIGHT</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam dignissimos voluptate aperiam sit cupiditate similique ut sapiente repellendus alias dolore, nobis iusto, sed impedit odit nisi in nostrum ipsa sint!</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 inner m-auto">
                <img src="img/sn.jpg" class="img-fluid d-block w-50 h-auto m-auto p-3" alt="...">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid pt-4">
        <h2 class="font-weight-bold m-auto"> Daily Nuggets</h2><br>
        <div class="row justify-content-evenly pt-4 m-auto">
            <div class="col-sm-12 col-md-6 col-lg-6 p-0" style="font-size: 150px; color:blueviolet; margin-left:-70px">
                <p class="text-center m-auto"><i class="fa-solid fa-scroll"></i></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 p-0 m-auto">
                <h4 class="text-center text-bg-dark">Post title</h4>
                <p class="text-wrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in semper tellus. Donec a elit vel massa elementum malesuada. Mauris lacus lectus, aliquam quis ultricies ac, pretium in leo. Donec dictum, massa id luctus facilisis, diam est malesuada massa, ac scelerisque arcu tellus at est. Aliquam id neque sed justo faucibus ornare. Duis quis dictum dui. In scelerisque lacus in tortor pellentesque faucibus. Nulla rhoncus facilisis dui, in posuere diam. Nulla a tortor non metus dictum pharetra. Duis euismod, tortor ut rhoncus vehicula, lacus neque pulvinar lectus, et condimentum massa nulla id tortor. Curabitur a condimentum purus, eu viverra nisi. Morbi pellentesque scelerisque tellus, et laoreet nisl mollis in.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</section>
<?php
include('events.php');
?>
<?php
//include('testimonies.php');
?>
<?php
include('components/footer.php');
?>