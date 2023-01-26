<?php
include('components/header.php');
?>
<?php
include('scripts/db.config.php');
?>
<section>
    <div class="container-fluid">
        <div class=" row justify-content-center">
            <div class="col-12 text-bg-light pt-4">
                <h2>Blog</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card-body border" style="width: auto; height:100%; margin-left:-20px; background-color:blueviolet;">


                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 vstack">

                    <div data-bs-spy="scroll" data-bs-target="#posts" data-bs-offset="0" data-bs-smooth-scroll="true" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                        <?php
                        try {
                            $stmt = $plug->prepare("SELECT * FROM posts ORDER BY date DESC");
                            $stmt->execute();
                            $posts = $stmt->fetchAll();
                        } catch (PDOException $e) {
                            exit("Error: " . $e->getMessage());
                        }
                        ?>
                        <?php foreach ($posts as $post) : ?>
            
                            <div class="posts border p-4 m-3 shadow" id="posts">
                                <h4 class="text-center text-bg-dark p-2"> <?php echo $post['title']; ?></h4>
                                <p class="text-break"> <?php echo $post['body']; ?></p>
                                <p><i>
                                        <h6>Author: <?php echo $post['author']; ?> </h6>
                                    </i></p>
                                <p class="card-text"><small class="text-muted"> Posted on <?php echo $post['date']; ?></small></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('components/footer.php');
?>