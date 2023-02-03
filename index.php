<?php
include('components/header.php');
?>
<?php
include('components/carousel.php');
?>

<section class="nuggets">
    <video src="img/Bible.mp4" type="video/mp4" autoplay muted loop class="video-bg">

    </video>
    <div class="container-fluid">
        <div class="row g-2 mb-0 m-auto">
            <div class="col-sm-12 col-lg-8 mb-md-0 p-md-4 slideInLeft">
                <div class="card-body p-4" style="background-color: rgba(42, 2, 48, 0.5);">
                    <div class="p-4 border rounded shadow">
                        <h2 class=" text-center my-4 text-white slideInLeft"> Daily Nuggets</h2>
                        <h4 class="text-center text-bg-dark p-2">Post Title</h4>
                        <p class="text-break text-white mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in semper tellus. Donec a elit vel massa elementum malesuada. Mauris lacus lectus, aliquam quis ultricies ac, pretium in leo. Donec dictum, massa id luctus facilisis, diam est malesuada massa, ac scelerisque arcu tellus at est.

                            Aliquam id neque sed justo faucibus ornare. Duis quis dictum dui. In scelerisque lacus in tortor pellentesque faucibus. Nulla rhoncus facilisis dui, in posuere diam. Nulla a tortor non metus dictum pharetra. Duis euismod, tortor ut rhoncus vehicula, lacus neque pulvinar lectus, et condimentum massa nulla id tortor.

                            Curabitur a condimentum purus, eu viverra nisi. Morbi pellentesque scelerisque tellus, et laoreet nisl mollis in.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sessions">
    <div class="container-fluid">
        <h2 class="text-center">Our Programs</h2>
        <div class="row gx-5 p-3">
            <div class="col-sm-12 col-md-8 col-lg-4 p-4 m-auto">
                <img src="img/sots.jpg" class="d-block w-100 h-auto p-4" alt="...">
            </div>
            <div class="col-sm-12 col-md-8 col-lg-4 m-auto">
                <img src="img/sn2.jpg" class=" d-block w-100 h-auto p-4" alt="...">
            </div>
            <div class="col-sm-12 col-md-8 col-lg-4 m-auto">
                <img src="img/sn.jpg" class=" d-block w-100 h-auto p-4" alt="...">
            </div>
        </div>
    </div>
</section>

<?php
include('events.php');
?>
<?php
include('testimonies.php');
?>
<?php
include('components/footer.php');
?>