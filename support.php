<?php
include('components/header.php');
?>
<section class="support-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-5 mb-5">
                <div class="card shadow  rounded">
                    <h2 class="text-center pt-2"><i class="fas fa-seedling"></i><br>Seeds & Offering </h2>
                    <br>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-3">
                                    <img src="img/momo.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-6">
                                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="$_POST">
                                        <div class=" p-5 mt-0">
                                            <div class="form-floating ">
                                                <div class=" mb-3 input-group">
                                                    <span class="input-group-text">Phone</span>
                                                    <input type="text" aria-label="phone-number" class="form-control" placeholder="024XXXXXXX" required>
                                                </div>
                                                <div class=" mb-3 input-group">
                                                    <span class="input-group-text">Amount</span>
                                                    <input type="text" aria-label="amount" class="form-control" name="amount" id="amount"placeholder="0.00" required>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-sm-6 mb-3">
                                                    <button class="btn btn-md btn-outline-success" type="submit" target="blank">Authorize Payment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-3">
                                    <img src="img/momo.jpg" class="img-fluid" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
include('components/footer.php');
?>