<?php
include('components/header.php');
?>
<section class="carousel">
    <div class="p-0 mb-0">
        <?php include('components/carousel.php');?>
    </div> 
</section>

<section class="logo">
<div class="container">
        <div class="row">
            <div class="col">
                <div class="card shadow p-3 mb-3 rounded">
                    <div class="text-center">
                        <p><h1>Welcome to Kingdom Life International</h1><i>Experiencing true intmacy with the Holy Spirit.</i></p> 
                    <i class="fa-candy-cane"></i>                       </div>
                    </div>            
                </div>
            </div>
        </div>
    </div>
</section>

<section class="welcome">
    <div class="container">
        <div class="row p-3 mb-3">
            <div class="col-sm">
                <div class="card shadow p-3 mb-5 rounded">
                    <div class="card-body align-self-center">
                        <img src="./img/papa.jpeg" style="display: flex; width: 28vw; height: 50vh;">
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card shadow p-3 mb-5 rounded">
                    <div class=" card-body align-self-center">
                        <img src="./img/klm-sm-hd.png" style="display: flex; width:28vw; height: 50vh;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card shadow p-3 mb-5 rounded">
                    <div class="card-body">
                        <h5>Welcome to Kingdom Life International</h5>
                        <span>Experiencing true intmacy with the Holy Spirit.</span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow p-3 mb-5 rounded">
                    <div class="card-body">
                        <h5>Welcome to Kingdom Life International</h5>
                        <span>Experiencing true intmacy with the Holy Spirit.</span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow p-3 mb-5 rounded">
                    <div class="card-body">
                        <h5>Welcome to Kingdom Life International</h5>
                        <span>Experiencing true intmacy with the Holy Spirit.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('events.php');
?>

<?php
include('carousel_events.php');
?>
<?php
include('testimonials.php');
?>
<?php
include('components/footer.php');
?>

<div class="modal fade" id="testimonyModal" tabindex="-1" role="dialog" aria-labelledby="testimonyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="testimonyModalLabel">Congratulations !!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>You have successfully shared your testimony. God bless you for giving hope to someone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
