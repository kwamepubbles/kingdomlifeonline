<?php
include('components/header.php');
?>
<div class="support-bg">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-bg-light pt-4">
                <div class="p-2 text-center">
                    <h2><i class="fas fa-seedling"></i><br>Seeds & Offering </h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-6 m-auto">
                <div class="p-3 hstack gap-3">
                    <div class="col p-3">
                        <img src="img/momo.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col p-3">
                        <img src="img/AirtelTigo-Money.png" class="img-fluid" alt="...">
                    </div>
                    <div class="col p-3">
                        <img src="img/vodafone-cash.png" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4 p-5">
                <img src="img/Donate Page_GiveNow.png" class="img-fluid w-100 h-auto" alt="...">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="$_POST">
                    <?php
                    if (isset($_POST['submit'])) {
                        $phone = $_POST['phone'];
                        $amount = $_POST['amount'];
                    }
                    ?>
                    <div class=" p-5 m-auto">
                        <div class="form-floating ">
                            <div class="col-sm-4 col-md-4 col-lg-6 mb-3 input-group">
                                <span class="input-group-text">Full Name</span>
                                <input type="text" aria-label="phone-number" name="fullname" class="form-control" placeholder="Jon Doe" required>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-6 mb-3 input-group">
                                <span class="input-group-text">Phone</span>
                                <input type="number" aria-label="phone-number" name="phone" class="form-control" placeholder="024XXXXXXX" required>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-6 mb-3 input-group">
                                <span class="input-group-text">Amount</span>
                                <input type="number" aria-label="amount" class="form-control" name="amount" id="amount" placeholder="0.00" required>
                            </div>
                        </div>
                        <div class="row justify-content-center m-auto">
                            <div class="col-2 mb-3">
                                <button class="btn btn-outline-success" type="submit" name="submit">Give</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include('components/footer.php');
?>