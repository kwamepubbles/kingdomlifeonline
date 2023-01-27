<?php
include('components/header.php');
?>
<section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="py-5 text-center text-bg-light">
                <h2><i class="fa regular fa-donate me-1"></i><br>Seeds</h2>
            </div>
        </div>
        <div class="row m-auto justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-6 hstack">
                <div class="col-4">
                    <img src="img/momo.jpg" class="img-fluid" alt="...">
                </div>
                <div class="col-4">
                    <img src="img/AirtelTigo-Money.png" class="img-fluid" alt="...">
                </div>
                <div class="col-4">
                    <img src="img/vodafone-cash.png" class="img-fluid" alt="...">
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
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="mobile-money-from" method="$_POST">
                    <div class="card-body">
                        <?php $msg = ""; ?>
                        <div class="row p-3 input-group">
                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="row p-3 input-group">
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="MoMo Number" required>
                        </div>
                        <div class="row p-3 input-group">
                            <input type="text" name="amount" class="form-control" id="amount" placeholder="Amount" required>
                        </div>
                        <div class="row">
                            <div class="text-center py-5">
                                <button class="btn btn-outline-success btn-lg" type="submit" name="submit">Give<i class="fa regular fa-donate ms-1"></i></button>
                            </div>
                        </div>
                        <script>
                            var form = document.getElementById("mobile-money-form");
                            form.addEventListener("submit", function(e) {
                                e.preventDefault();
                                var momoNumber = document.getElementById("fullname").value;
                                var phoneNumber = document.getElementById("phone").value;
                                var paymentAmount = document.getElementById("amount").value;

                                // Use payment gateway provider's API to send mobile money information
                                var data = {
                                    momoNumber: momoNumber,
                                    phoneNumber: phoneNumber,
                                    paymentAmount: paymentAmount
                                };
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "https://smsc.hubtel.com/v1/messages/send?clientsecret=wqzdimfy&clientid=zcfjsedh&from=KingdomLife&to=0543246671&content=This+Is+A+Test+Message", true);
                                xhr.setRequestHeader("Content-Type", "application/json");
                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        var response = JSON.parse(xhr.responseText);
                                        if (response.status === "success") {
                                            // Handle successful transaction
                                            alert("Payment successful!");
                                            // Redirect to thank you page
                                            window.location.href = "thank-you.html";
                                        } else {
                                            // Handle error
                                            alert("Error: " + response.message);
                                        }
                                    }
                                };
                                xhr.send(JSON.stringify(data));
                            });
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