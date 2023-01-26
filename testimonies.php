<!-- testimony Body -->
<section>
    <div class="container-fluid">
        <?php
        try {
            $stmt = $plug->prepare("SELECT * FROM testimony  ORDER BY id DESC");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $posts = $stmt->fetchAll();
        } catch (PDOException $e) {
            exit("Error: " . $e->getMessage());
        }
        ?>
        <h2 class="my-5">Testimonies</h2>
        <div class="row">
            <div class=" col-sm-12 col-md-8 col-lg-8 p-0 m-auto">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <?php foreach ($posts as $post) : ?>
                            <div class="carousel-item active">
                                <div class="img-box"><img src="img/<?php echo $post['img']; ?>" alt=""></div>
                                <p class="testimonial"><?php echo $post['message']; ?></p>
                                <p class="overview"><b><?php echo $post['fname']; ?> <?php echo $post['lname']; ?></b></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="row">
                    <button class=" col-sm-6 col-md-4 col-lg-4 m-auto btn btn-outline-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
                        Share Testimony
                    </button>
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
                            $image = htmlspecialchars($_POST['img']);
                            $fname = htmlspecialchars($_POST['fname']);
                            $lname = htmlspecialchars($_POST['lname']);
                            $message = htmlspecialchars($_POST['message']);

                            if ($query->rowCount() == 0) {
                                $query = $plug->prepare("INSERT INTO testimony (img,fname,lname,message) VALUES (:img,:fname,:lname,:message)");
                                $query->bindParam("img", $image, PDO::PARAM_STR);
                                $query->bindParam("fname", $fname, PDO::PARAM_STR);
                                $query->bindParam("lname", $lname, PDO::PARAM_STR);
                                $query->bindParam("message", $message, PDO::PARAM_STR);
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
                            <label for="name" class="text-white">Upload Picture:</label>
                            <input type="file" name="img" id="image" class="form-control" required>
                        </div><br>
                        <div class="form-group">
                            <label for="name" class="text-white">First Name:</label>
                            <input type="text" name="fname" id="fullname" class="form-control text-capitalize" required>
                        </div><br>
                        <div class="form-group">
                            <label for="name" class="text-white">Last Name:</label>
                            <input type="text" name="lname" id="lastname" class="form-control text-capitalize" required>
                        </div><br>
                        <div class="form-group">
                            <label for="message" class="text-white">Message:</label>
                            <textarea name="message" id="msg" cols="30" rows="10" class="form-control text-sentence" placeholder="kindly keep it brief" required></textarea>
                        </div><br>
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