<?php
include('components/header.php');
?>
<div class="support-bg">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm mt-auto">
                <div class="card shadow">
                    <h2 class="text-center pt-2"><i class="fas fa-seedling"></i><br>Seeds & Offering </h2>
                    <br>
                    <div class="">

                        <div class="row justify-content-center">
                            <div class="col-2 p-3">
                                <img src="img/momo.jpg" class="img-fluid" alt="...">
                            </div>
                            <div class="col-2">
                                <img src="img/AirtelTigo-Money.png" class="img-fluid" alt="...">
                            </div>
                            <div class="col-2 p-3">
                                <img src="img/vodafone-cash.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <p>
                                <h1 class="text-center">SUPPORT <br> THE <br> KINGDOM</h1>
                                <img src="img/Donate Page_GiveNow.png" class="img-fluid" alt="...">
                                </p>
                            </div>
                            <div class="col-6">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="$_POST">
                                    <?php


                                    if (isset($_POST['submit'])) {
                                        $phone = $_POST['phone'];
                                        $amount = $_POST['amount'];
                                    }
                                    ?>
                                    <div class=" p-5 mt-0">
                                        <div class="form-floating ">
                                            <div class=" mb-3 input-group">
                                                <span class="input-group-text">Full Name</span>
                                                <input type="text" aria-label="phone-number" name="fullname" class="form-control" placeholder="Jon Doe" required>
                                            </div>
                                            <div class=" mb-3 input-group">
                                                <span class="input-group-text">Phone</span>
                                                <input type="number" aria-label="phone-number" name="phone" class="form-control" placeholder="024XXXXXXX" required>
                                            </div>
                                            <div class=" mb-3 input-group">
                                                <span class="input-group-text">Amount</span>
                                                <input type="number" aria-label="amount" class="form-control" name="amount" id="amount" placeholder="0.00" required>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-sm-3 mb-3">
                                                <button class="btn btn-md btn-outline-success" type="submit" name="submit">Give</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('components/footer.php');
?>