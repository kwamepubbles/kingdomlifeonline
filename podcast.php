<?php
include('components/header.php');
?>
<section class="podcast">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-bg-light py-5">
                <h2><i class="fa-solid fa-headphones-simple me-1"></i>Podcasts</h2>
            </div>
        </div>
        <video src="img/fellowship.mp4" type="video/mp4" autoplay muted loop class="video-bg">

        </video>
        <div class="col-sm 12 col-md-6 py-3 m-auto">
            <div class="card">
                <div class="card-body" class="search">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="col-4 btn-contact-bg" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center m-auto">
            <div class="col-sm-12 col-md-8">
                <div class="card">
                    <div class="row justify-content-start g-3">
                        <?php
                        try {
                            $stmt = $plug->prepare("SELECT * FROM podcasts ORDER BY id DESC");
                            $stmt->execute();
                            $pods = $stmt->fetchAll();
                        } catch (PDOException $e) {
                            exit("Error: " . $e->getMessage());
                        }
                        ?>
                        <?php foreach ($pods as $pod) : ?>

                            <div class="col-6 col-md-4">
                                <div class="p-2">
                                    <div class="ratio ratio-4x3">
                                        <iframe src="<?php echo $pod['source']; ?>" title="<?php echo $pod['title']; ?>" allowfullscreen></iframe>
                                        <!-- 4:3 aspect ratio -->
                                    </div>
                                    <caption>
                                        <p class="card-text text-capitalize"><?php echo $pod['description']; ?><br><small class="text-muted">Duration: <?php echo $pod['duration']; ?></small></p>
                                        <p class="card-text"></p>
                                    </caption>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center py-3 m-auto">
            <div class="col-sm-6 col-md-3 text-center">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<?php
include('components/footer.php');
?>