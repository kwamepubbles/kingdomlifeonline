<?php
include('components/header.php');
?>
<section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-bg-light pt-4">
                <div class="p-2 text-center">
                    <h2><i class="fas fa-seedling"></i><br>Seeds</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center  m-auto">
            <div class="col-sm-8 col-md-8 col-lg-6">
                <div class="hstack gap-3 m-auto">
                    <div class="col p-3">
                        <img src="img/momo.jpg" class="d-block w-50" alt="...">
                    </div>
                    <div class="col p-3">
                        <img src="img/AirtelTigo-Money.png" class="d-block w-50" alt="...">
                    </div>
                    <div class="col p-3">
                        <img src="img/vodafone-cash.png" class="d-black w-50" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center py-4">
            <div class="col-sm-8 col-md-8 col-lg-6">
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
                                <input type="text" aria-label="phone-number" name="fullname" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-6 mb-3 input-group">
                                <input type="text" aria-label="phone-number" name="phone" class="form-control" placeholder="MoMo Number" required>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-6 mb-3 input-group">
                                <input type="text" aria-label="amount" class="form-control" name="amount" id="amount" placeholder="Amount" required>
                            </div>
                        </div>
                        <div class="row justify-content-center m-auto">
                            <div class="col-2 mb-3 py-4">
                                <button class="btn btn-outline-success btn-lg" type="submit" name="submit">Give</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include('components/footer.php');
?>