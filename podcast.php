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
                    <div id="pull_data">
                        <div class="row justify-content-start g-3">
                            <?php

                            $limit = 6;
                            $page = 0;
                            $display = "";

                            if (isset($_POST['page'])) {
                                $page = $_POST['page'];
                            } else {
                                $page = 1;
                            }

                            $start_from = ($page - 1) * $limit;

                            try {
                                $stmt = $plug->prepare("SELECT * FROM podcasts ORDER BY id LIMIT $start_from, $limit");
                                $stmt->execute();
                                $pods = $stmt->fetchAll();
                            } catch (PDOException $e) {
                                exit("Error: " . $e->getMessage());
                            }
                            foreach ($pods as $pod) :
                            ?>

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
        </div>

        <div class="row justify-content-center">
            <nav class="my-auto" aria-label="...">
            <?php 

            $total_rows = $plug->query("SELECT COUNT(*) FROM podcasts");
            $row_count = $total_rows->fetchColumn(); 
            
            $total_pages = ceil($row_count/$limit);
            
            $display.='<ul class="pagination pagination-sm">';

            if($page > 1){
                $previous = $page - 1;
                $display.='<li class="page-item" id="1"><span class="page-link">Previous</span></li>';
                $display.='<li class="page-item" id="'.$previous.'"></li>';
            }

            for($i=1; $i<=$total_pages; $i++){
                    $active_class = "";

                    if($i==$page){
                        $active_class = "active";
                    }

                    $display.='<li class="page-item '.$active_class.'" id="'.$i.'" aria-current="page"><span class="page-link">'.$i.'</span></li>';
            }
                
            if($page < $total_pages){
                $page++;
                $display.='<li class="page-item" id="'.$page.'">';
                $display.='<li class="page-item" id="'.$total_pages.'"><span class="page-link">Next</span></li>';
            }
            
            $display.='</ul>';

            echo $display;
            
            ?>
            </nav>
        </div>
    </div>

    
    <script>
        function fetch_data(page) {
            $.ajax({
                url: "podcast.php",
                method: "POST",
                data: {
                    page: page,
                },

                success: function(data) {
                    $("#pull_data").html(data);
                },
            })
        }

        fetch_data();

        $(document).on("click", ".page-item", function(){
            let page = $(this).attr("id");

            fetch_data(page);
        })
    </script>
</section>
<?php
include('components/footer.php');
?>