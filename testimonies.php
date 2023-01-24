<!-- testimony Body -->
<section>
    <div class="container">
        <h2 class="my-5">Testimonies</h2>
        <div class="row">
            <div class=" col-sm-12 col-md-8 col-lg-8 p-0 m-auto">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="img-box"><img src="img/5.jpeg" alt=""></div>
                            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                            <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                        </div>
                        <div class="carousel-item">
                            <div class="img-box"><img src="img/8.jpeg" alt=""></div>
                            <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                            <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                        </div>
                        <div class="carousel-item">
                            <div class="img-box"><img src="img/9.jpeg" alt=""></div>
                            <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                            <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <div class="row">
                        <button class=" col-sm-6 col-md-6 col-lg-6 m-auto btn btn-outline-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
                            Share Testimony
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 mb-4">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel" style="background-color: #6f07b4;">
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title m-auto text-white" id="offcanvasLabel">TESTIMONY</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <?php
                    require_once('scripts/db.config.php');

                    try {
                        $msg = "";
                        if (isset($_POST['submit'])) {
                            $fname = htmlspecialchars($_POST['fname']);
                            $email = htmlspecialchars($_POST['email']);
                            $message = htmlspecialchars($_POST['message']);
                            $checked = htmlspecialchars($_POST['checked']);
                            $query = $plug->prepare("SELECT * FROM testimony WHERE email=:email");
                            $query->bindParam("email", $email, PDO::PARAM_STR);
                            $query->execute();

                            if ($query->rowCount() > 0) {
                                $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">The email address is already registered!</p>';
                            }

                            if ($query->rowCount() == 0) {
                                $query = $plug->prepare("INSERT INTO testimony (fname,email,message,checked) VALUES (:fname,:email,:message,:checked)");
                                $query->bindParam("message", $message, PDO::PARAM_STR);
                                $query->bindParam("fname", $fname, PDO::PARAM_STR);
                                $query->bindParam("email", $email, PDO::PARAM_STR);
                                $query->bindParam("checked", $checked, PDO::PARAM_STR);
                                $result = $query->execute();

                                if ($result) {
                                    $msg = '<div class="alert alert-success alert-dismissible fade show" role="alert">Testimony successfully submitted</div>';
                                }
                            }
                        }
                    } catch (PDOException $e) {
                        exit("Error: " . $e->getMessage());
                    }
                    ?>

                    <div class="form-group">
                        <?= $msg; ?>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                        <div class="form-group">
                            <label for="name" class="text-white">Full Name:</label>
                            <input type="text" name="fname" id="fullname" class="form-control text-capitalize" required>
                        </div><br>
                        <div class="form-group">
                            <label for="email" class="text-white">E-mail:</label>
                            <input type="email" name="email" id="email" class="form-control text-capitalize" required>
                        </div><br>
                        <div class="form-group">
                            <label for="message" class="text-white">Message:</label>
                            <textarea name="message" id="msg" cols="30" rows="10" class="form-control text-sentence" required></textarea>
                        </div><br>
                        <div class="form-inline">
                            <label class="text-white">Send me event notifications via E-mail</label>
                            <input type="checkbox" name="checked" id="checkbx" value="Yes" class="mr-1">
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group text-center col-4 mt-4">
                                <button type="submit" name="submit" class="btn btn-success">Submit <i class="bi bi-send-fill"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>