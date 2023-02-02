<?php
include('components/header.php');
?>
<style>
    .thumb {
        margin-bottom: 30px;
    }

    img.zoom {
        width: 100%;
        height: 200px;
        border-radius: 5px;
        object-fit: cover;
        transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
    }

    .fancybox-margin {
        margin-right: 17px;
    }

    .transition {
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }

    .modal-header {
        border-bottom: none;
    }

    .modal-title {
        color: #000;
    }

    .modal-footer {
        display: none;
    }
</style>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>


<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>



<!-- Page Content -->
<section class="gallery">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 py-5 bg-light">
                <h2><i class="fa-solid fa-camera-viewfinder me-1 mr-1"></i> Gallery</h2>
            </div>
        </div>
        <div class="row p-5">
            <div class="col-lg-3 col-md-4 col-sm-6 thumb">
                <a href="img/1.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/1.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 thumb">
                <a href="img/2.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/2.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 thumb">
                <a href="img/3.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/3.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 thumb">
                <a href="img/4.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/4.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 thumb">
                <a href="img/5.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/5.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 thumb">
                <a href="img/6.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/6.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 thumb">
                <a href="img/7.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/7.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 thumb">
                <a href="img/8.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/8.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <!--Grid container-->
    <div class="container-fluid text-white pt-2" style="background-color: #8f6304;">
        <!--Grid row-->
        <div class="row justify-content-center m-auto">
            <!--Grid column-->
            <div class="col-sm-12 col-md-4 col-lg-4  text-center m-auto">
                <div><i class="fas fa-church"></i></div>
                <h6 class="text-uppercase">Programs</h6>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-white">School of the Spirit</a></li>
                    <li><a href="index.php" class="text-white">Solution Night</a></li>
                    <li><a href="index.php" class="text-white">Mountain Experience</a></li>
                </ul>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-sm-12 col-md-4 col-lg-4 text-center m-auto">
                <div><i class="fa-solid fa-photo-film-music"></i></div>
                <h6 class="text-uppercase">Media </h6>
                <ul class="list-unstyled">
                    <li><a href="gallery.php" class="text-white">Gallery</a></li>
                    <li><a href="podcast.php" class="text-white">Podcasts</a></li>
                    <li><a href="library.php" class="text-white">Library</a></li>
                </ul>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-sm-12 col-md-4 col-lg-4 text-center m-auto">
                <div><i class="fas fa-headset"></i></div>
                <h6 class="text-uppercase">Contact </h6>
                <ul class="list-unstyled">
                    <li class="text-break"><a><i class="fa fa-map-marker"></i> University of Ghana, Legon. Accra-GH</a></li>
                    <li><a><i class="fas fa-envelope"></i> kingdomlife2233@gmail.com</a></li>
                    <li><a><i class="fas fa-phone"></i> (+233) 234 567 88</a></li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->
    <!-- Section: Social media -->
    <!-- Right -->
    <div class="container-fluid social">
        <div class="row justify-content-evenly mx-auto">
            <div class="col-sm-12 col-md-12 col-lg-6 ">
                <h2 class="p-0 m-0  text-white"><i class="fas fa-link"></i> Connect With Us :</h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 m-auto">
                <nav class="navbar">
                    <ul class="navbar list-unstyled col-6 m-auto">
                        <li class="nav-item"><a href="#" role="button" class="nav-link"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="nav-item"><a href="#" role="button" class="nav-link"><i class="fab fa-whatsapp"></i></a></li>
                        <li class="nav-item"><a href="#" role="button" class="nav-link"><i class="fab fa-telegram"></i></a></li>
                        <li class="nav-item"><a href="#" role="button" class="nav-link"><i class="fa-solid fa-city"></i></a></li>
                        <li class="nav-item"><a href="#" role="button" class="nav-link"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Right -->
    <!-- Copyright -->
    <div class="text-center text-white p-1 copyright ">
        <?php echo "©";
        echo date("Y");
        echo " Copyright."; ?><br>
        <a class="text-white" href="#">Data Protection and Privacy Policy</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>