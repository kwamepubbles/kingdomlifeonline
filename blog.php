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
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6 p-0 m-auto vstack gap-3">
                    <?php
                    try {
                        $stmt = $plug->prepare("SELECT * FROM posts ORDER BY date DESC");
                        $stmt->execute();
                        $posts = $stmt->fetchAll();

                        foreach ($posts as $post) {
                            echo '<div class="border p-2 mb-3 shadow">';
                            echo '<h4 class="text-center text-bg-dark p-2">'.$post['title'].'</h4>';
                            echo '<p class="p-2 m-auto">'.$post['body'].'</p>';
                            echo '<p class="p-2"><h6>Author:</h6>'.$post['author'].'</p>';
                            echo '<a href="#" class="read-more">Read More</a>';
                            echo '<p class="card-text"><small class="text-muted"> Posted on '.$post['date'].'</small></p>';
                            echo '</div>';
                        }
                    } catch (PDOException $e) {
                        exit("Error: " . $e->getMessage());
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('components/footer.php');
?>