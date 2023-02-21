<?php
include('components/header.php');
?>
<section class="support">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="py-5 text-center text-bg-light">
                <h2><i class="fa regular fa-donate me-1"></i>Seeds & Offering</h2>
            </div>
        </div>
        <div class="col-4 m-auto">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 col-lg-6 hstack">
                    <div class="col-4">
                        <img src="img/momo.jpg" class="img-fluid p-0">
                    </div>
                    <div class="col-4">
                        <img src="img/AirtelTigo-Money.png" class="img-fluid p-0">
                    </div>
                    <div class="col-4">
                        <img src="img/vodafone-cash.png" class="img-fluid p-0">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <?php
            try {
                //code...

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $name = $_POST['fullname'];
                    $phone = $_POST['phone'];
                    $amount = $_POST['amount'];
                }
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
            <div class="col-sm-8 col-md-6 col-lg-4">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="mobile-money-form" method="$_POST">
                    <div class="card-body px-3">
                        <?php $msg = ""; ?>
                        <div class="row mb-3 form-floating">
                            <input type="text" id="floatingInput" name="fullname" class="form-control" placeholder="Full Name" required>
                            <label for="floatingInput" class="px-auto">Full Name</label>
                        </div>
                        <div class="row mb-3 form-floating">
                            <input type="number" id="floatingInput" name="phone" class="form-control" placeholder="MoMo Number" required>
                            <label for="floatingInput" class="px-auto">MoMo Number</label>
                        </div>
                        <div class="row mb-3 form-floating">
                            <input type="number" id="floatingInput" name="amount" class="form-control" placeholder="Amount" required>
                            <label for="floatingInput" class="px-auto">Amount</label>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center py-5">
                                <button class="btn-contact-bg" type="submit" name="submit" onclick=run();>Give<i class="fa regular fa-donate ms-1"></i></button>
                            </div>
                        </div>
                        <script>
                            import fetch from'assets/js/node_modules/node-fetch';

                            async function run() {
                                const mobileNumber = 'YOUR_mobileNumber_PARAMETER';
                                const resp = await fetch(
                                    `https://devp-reqsendmoney-230622-api.hubtel.com/request-money/${mobileNumber}`, {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            Authorization: 'Basic ' + Buffer.from('<username>:<password>').toString('base64')
                                        },
                                        body: JSON.stringify({
                                            amount: 1,
                                            title: 'string',
                                            description: 'string',
                                            clientReference: 'string',
                                            callbackUrl: 'http://example.com',
                                            cancellationUrl: 'http://example.com',
                                            returnUrl: 'http://example.com',
                                            logo: 'http://example.com'
                                        })
                                    }
                                );

                                const data = await resp.json();
                                console.log(data);
                            }

                            run();
                        </script>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include('components/footer.php');
?>