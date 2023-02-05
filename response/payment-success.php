<?php
include('components/header.php');
?>
<div class="container" id="payment-success">
    <div class="row justify-content-center py-5 m-auto" class="alert" role="alert">
        <div class="col-6 p-5">
            <div class="card-body border p-5 text-center">
                <span><i class="fa-sharp fa-solid fa-circle-check tick" style="color: lime; font-size: 150px;"></i></span>
                <h1>Payment Successful!</h1>
                <p style="font-size: 1.2rem;">Thank you for honouring the Lord with your substance.</p>
                <div class="p-5">
                    <a class="btn btn-outline-success btn-lg" href="index.php" type="button" style="font-size: 1.2rem;"> Ok</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('components/footer.php');
?>