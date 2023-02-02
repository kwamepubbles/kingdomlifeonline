<?php
include('components/header.php');
?>
<section class="prayer-request-form">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 p-0 m-0">
                <img src="img/3.jpeg" class="img-fluid">
            </div>
            <div class="col-3 p-0 m-0">
                <img src="img/prayer2.jpg" class="img-fluid">
            </div>
            <div class="col-3 p-0 m-0">
                <img src="img/calm-spiritual.jpg" class="img-fluid">
            </div>
            <div class="col-3 p-0 m-0">
                <img src="img/couple-husband-wife.jpg" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="text-center bg-light">
                <h2 class="my-5"><i class="fas fa-person-praying me-1"></i>Let's Pray </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 m-auto">
                <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="$_POST">
                    <div class="row p-5 event-area text-center">
                        <div class="col-sm-12 col-md-8 mb-3 form-floating m-auto">
                            <input type="text" class="form-control" placeholder="Full Name" id="floatingInput" required>
                            <label for="floatingInput" class="px-5"> Full Name </label>
                        </div>
                        <div class="col-sm-12 col-md-4 form-floating mb-3">
                            <input type="tel" class="form-control" placeholder="Contact" id="floatingInput" required>
                            <label for="floatingInput" class="px-5"> Contact </label>
                        </div>
                        <div class="col-sm-12 col-md-8 mb-3 form-floating input-group">
                            <span class="input-group-text px-5"for="floatingInputGroup1">Supporting Documents</span>
                            <input type="file" class="form-control p-3" placeholder="Upload supporting documents" id="floatingInputGroup1" required>
                        </div>

                        <div class="col-12 form-floating mb-3 m-auto">
                            <textarea type="text" class="form-control" placeholder="Enter prayer request..." id="floatingTextarea" id="specialneeds" style="height: 200px" required></textarea>
                            <label for="floatingTextarea" class="px-5">Enter prayer request...</label>
                        </div>
                        <div class="col-6 mx-auto ">
                            <button class="btn btn-success btn-md" type="submit">Submit Request</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
<?php
include('components/footer.php');
?>