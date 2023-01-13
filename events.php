<section>
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
    <div class="container-fluid pt-4" id="timeline">
        <div class="row justify-content-center m-auto">
            <!-- loop through events from the database and create a timeline entry for each -->
            <?php foreach ($events as $event) : ?>
                <div class="row">
                    <h2 class="font-weight-bold text-center">Upcoming Events</h2>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-6 p-0 m-auto" style="font-size: 180px;">
                    <p class="text-center"><i class="fa-solid fa-calendar-days"></i></p>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-6 pt-4 m-auto">
                    <div class="timeline-entry p-2">
                        <div class="timeline-content m-auto">
                            <h3 class="text-center text-uppercase"><?php echo $event['title']; ?></h3><br>
                            <h1 class="timeline-date text-center"><?php echo $event['date']; ?></h1><br>
                            <p class="text-center"><?php echo $event['description']; ?></p>
                        </div>
                        <div class="row justify-content-center m-auto">
                            <div class=" col-4 p-2">
                                <a href="#" class="btn btn-primary font-weight-bold ">Click here to register</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>