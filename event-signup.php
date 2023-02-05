<?php
include('components/header.php');
?>
<section class="event-signup-form">
    <div class="container-fluid">
        <video src="img/fellowship.mp4" type="video/mp4" autoplay muted loop class="video-bg">

        </video>
        <div class="row py-5 bg-light">
            <h2 class="my-5"><i class="fas fa-pen-to-square me-1"></i>Event Register</h2>
        </div>
        <div class="row">
            <div class="col-md-8 m-auto">
                <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="$_POST">
                    <div class="row py-5 event-area text-center">
                        <div class="col-sm-12 col-md-12 mb-3 m-auto form-floating">
                            <input type="text" class="form-control" placeholder="Full Name" id="floatingInput" required>
                            <label for="floatingInput" class="px-4">Full Name</label>
                        </div>
                        <div class="col-sm-12 col-md-4 mb-3 form-floating">
                            <input type="tel" class="form-control" placeholder="Contact" id="floatingInput" required>
                            <label for="floatingInput" class="px-4">Contact</label>
                        </div>

                        <div class="col-sm-12 col-md-4 mb-3 form-floating">
                            <select class="form-select" name="sex" id="floatingSelect" required>
                                <option class="selected"></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label for="floatingSelect" class="px-4">Sex</label>
                        </div>
                        <div class="col-sm-12 col-md-4 mb-3 form-floating">
                            <select class="form-select" name="status" id="floatingSelect" required>
                                <option class="selected"></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <label for="floatingSelect" class="px-4">Number of People</label>
                        </div>
                        <div class="col-12 mb-3 m-auto form-floating">
                            <textarea type="text" rows="10" cols="30" class="form-control" placeholder="Any special needs...?" id="floatingTextarea" style="height: 200px"></textarea>
                            <label for="floatingTextarea" class="px-4">Any special needs...?</label>
                        </div>
                        <div class="col-6 mx-auto ">
                            <button class="btn-contact-bg" type="submit">Register</button>
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