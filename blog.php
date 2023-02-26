<?php
include('components/header.php');
?>
<section class="blog">
    <div class="container-fluid p-0 m-0">
        <div class=" row justify-content-center">
            <div class="col-12 text-bg-light py-5">
                <h2><i class="fa-solid fa-blog me-1"></i>Blog</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card-body w-auto h-100" style=" margin-left:-15px; margin-right:-20px; background-image: linear-gradient( 83.2deg,  rgba(150,93,233,1) 10.8%, rgba(99,88,238,1) 94.3% );">

                    </div>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-8 vstack">

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

                            <div class="posts border p-4 m-3" id="posts">
                                <h4 class="text-left p-2"> <?php echo $post['title']; ?></h4>
                                <p class="text-break"> <?php echo $post['body']; ?></p>
                                <p><i>
                                        <h6>Author: <?php echo $post['author']; ?> </h6>
                                    </i></p>
                                <p class="card-text"><small class="text-muted"> Posted on <?php echo $post['date']; ?></small></p>
                                <div class="comments">
                                    <script src="assets/js/comment.js"></script>
                                    <script>
                                        new Comments({
                                            page_id: 1
                                        });
                                    </script>
                                </div>
                                <?php include('admin/comments.php'); ?>
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