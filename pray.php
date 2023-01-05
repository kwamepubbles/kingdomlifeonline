<?php
include('components/header.php');
?>
<section class="pray">
    <div class="container-fluid">
        <div class="row">
            <div class="">
                <div class="p-2 text-center">
                    <i class="fas fa-praying-hands"></i><br>
                    <h2>Let's Pray </h2>
                </div>
                <div class="row">
                    <div class="col-3 p-0">
                        <img src="img/3.jpeg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-3 p-0">
                        <img src="img/prayer2.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-3 p-0">
                        <img src="img/calm-spiritual.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-3 p-0">
                        <img src="img/couple-husband-wife.jpg" class="img-fluid" alt="...">
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-4 pt-5">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="$_POST">
                                <div class=" p-3 m-0">
                                    <div class="form-floating ">
                                        <div class=" mb-3 input-group">
                                            <span class="input-group-text">First Name</span>
                                            <input type="text" aria-label="First name" class="form-control" required>
                                        </div>
                                        <div class=" mb-3 input-group">
                                            <span class="input-group-text">Last Name</span>
                                            <input type="text" aria-label="Last name" class="form-control" required>
                                        </div>
                                        <div class=" mb-3 input-group">
                                            <span class="input-group-text">Contact</span>
                                            <input type="text" aria-label="contact" class="form-control" placeholder="E.g 024XXXXXXX" required>
                                        </div>
                                    </div>
                                    <div class=" mb-3">
                                        <textarea class="form-control " cols="20" rows="3" placeholder="Enter Prayer Request here" required></textarea>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-4 mb-3">
                                            <button class="btn btn-sm btn-outline-success" type="submit">Submit <i class="fas fa-envelope"></i></button>
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
</section>
<?php
include('components/footer.php');
?>