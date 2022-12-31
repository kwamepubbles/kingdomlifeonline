<?php
include('components/header.php');
?>
<section class="pray shadow">
    <div class="container">
        <div class="row p-4">
            <div class="card shadow">
                <div class="p-5 text-center">
                    <i class="fas fa-praying-hands"></i><br>
                    <h2>Let's Pray </h2>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
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
                        <div class="col-6 p-3">
                            <img src="img/prayer.png" class="img-fluid" alt="...">
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