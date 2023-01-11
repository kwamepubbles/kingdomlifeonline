<?php
include('components/header.php');
?>
<section>
    <div class="container-fluid">
        <?php
        include('scripts/db.config.php');
        ?>
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="col-3 pt-5 mb-5 me-0 ms-5">Kingdom Blog</h2>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-sm-8 hstack gap-3">
                    <?php
                    try {

                        $stmt = $plug->prepare("SELECT * FROM posts ORDER BY date DESC");
                        $stmt->execute();
                        $posts = $stmt->fetchAll();

                        foreach ($posts as $post) {
                            echo '<div class="border p-3 mb-3 shadow">';
                            echo '<h4 class="text-center text-bg-dark p-2">' . $post['title'] . '</h4>';
                            echo '<p>' . $post['body'] . '</p>';
                            echo '<p>' . $post['author'] . '</p>';
                            echo '<p class="card-text"><small class="text-muted"> Posted on ' . $post['date'] . '</small></p>';
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