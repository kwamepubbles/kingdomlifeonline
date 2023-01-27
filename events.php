<section class="event-bg">
    <script>
        // JavaScript to toggle the timeline entry content
        document.querySelectorAll('.timeline-entry').forEach(entry => {
            const date = entry.querySelector('.timeline-date');
            const content = entry.querySelector('.timeline-content');
            date.addEventListener('click', () => {
                content.classList.toggle('visible');
            });
        });

        var events = document.querySelectorAll(".event");

        events.forEach(function(event) {
            event.addEventListener("mouseover", function() {
                event.style.backgroundColor = "lightgrey";
            });
            event.addEventListener("mouseout", function() {
                event.style.backgroundColor = "white";
            });
        });
    </script>
    <?php
    // Connect to the database and retrieve events
    try {
        $stmt = $plug->query('SELECT * FROM events ORDER BY date ASC');
        $events = $stmt->fetchAll();
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
    ?>
    <!-- HTML for the timeline container -->
    <div class="container-fluid" id="timeline">
        <div class="row py-4 mb-4">
            <h2 class="text-center text-white">Upcoming Events</h2>
        </div>
        <div class="row justify-content-center pb-5 g-0">
            <!-- loop through events from the database and create a timeline entry for each -->
            <?php foreach ($events as $event) : ?>
                <div class=" col-sm-12 col-md-8 col-lg-6 m-auto shadow">
                    <div class="card-body timeline-entry">
                        <div class="timeline-content text-center m-auto p-4">
                            <h1 class="timeline-date text-center m-auto"style="font-size: 3rem;"><?php echo $event['date']; ?></h1><br>
                            <h3 class="text-center text-uppercase m-auto"><?php echo $event['title']; ?></h3><br>
                            <p class="text-center m-auto"><?php echo $event['description']; ?></p>
                            <img src="<?php //echo $event['img']; ?>" alt="<?php //echo $event['img_desc']; ?>">
                            <div class="row justify-content-center">
                                <div class=" col-4 text-center m-auto">
                                    <a href="#" class="btn btn-primary font-weight-bold ">REGISTER</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>