<?php
//include('components/header.php');
?>
<html class="">
<?php
include('scripts/db.config.php');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery-Kingdomlifeonline.com</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #301934 !important;
            font-family: "Asap", sans-serif;
            color: #989898;
            margin: 10px;
            font-size: 16px;
        }

        #demo {
            height: 100%;
            position: relative;
            overflow: hidden;
        }


        .green {
            background-color: #6fb936;
        }

        .thumb {
            margin-bottom: 30px;
        }

        .page-top {
            margin-top: 85px;
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
    <style type="text/css">
        .fancybox-margin {
            margin-right: 17px;
        }
    </style>
</head>

<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>



    <!-- Page Content -->
    <div class="container page-top">

        <div class="row justify-content-center">
            <p class="text-white text-center h2 p-2 m-4">Go back to <a class="btn btn-outline-success btn-lg" type="button" href="index.php">Homepage</a></p>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/1.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/1.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/2.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/2.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/3.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/3.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/4.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/4.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/5.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/5.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/6.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/6.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/7.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/7.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/8.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="fancybox" rel="ligthbox">
                    <img src="img/8.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=650&amp;w=940" class="zoom img-fluid" alt="">
                </a>
            </div>
            
        </div>

        <div class="row justify-content-center">
            <p class="text-white text-center h2 p-2 m-4">Go back to <a class="btn btn-outline-success btn-lg" type="button" href="index.php">Homepage</a></p>
        </div>

    </div>

</body>

<?php
//include('components/footer.php');
?>