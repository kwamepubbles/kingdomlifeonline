<?php
include('components/header.php');
?>
<section class="pray">
    <div class="container-fluid pb-4">
        <div class="row justify-content-center">
            <div class="col-3 p-0 m-0">
                <img src="img/3.jpeg" class="img-fluid" alt="...">
            </div>
            <div class="col-3 p-0 m-0">
                <img src="img/prayer2.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-3 p-0 m-0">
                <img src="img/calm-spiritual.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-3 p-0 m-0">
                <img src="img/couple-husband-wife.jpg" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-bg-light pt-4">
                <div class="p-2 text-center">
                    <h2><i class="fas fa-praying-hands"></i><br>Let's Pray </h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-6 p-4 m-muto">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="$_POST">
                            <div class=" text-center p-3 m-auto">
                                <div class="form-floating p-4">
                                    <div class="col-4 p-3 input-group">
                                        <input type="text" aria-label="First name" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="col-4 p-3 input-group">
                                        <input type="text" aria-label="Last name" class="form-control" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-4 p-3 input-group">
                                        <input type="text" aria-label="contact" class="form-control" placeholder="Contact" required>
                                    </div>
                                </div>
                                <div class="col p3 mb-3">
                                    <textarea class="form-control " cols="20" rows="7" placeholder="Enter Prayer Request here..." required></textarea>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-3 mx-4">
                                        <button class="btn btn-md btn-outline-success" type="submit">Submit <i class="fas fa-envelope"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('components/footer.php');
?>