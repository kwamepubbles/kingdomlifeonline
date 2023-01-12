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
        $plug = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USER, PASSWORD);
        $stmt = $plug->query('SELECT * FROM events ORDER BY date ASC');
        $events = $stmt->fetchAll();
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
    ?>
    <!-- HTML for the timeline container -->
    <div id="timeline" class="container-fluid">
        <div class="row justify-content-center">

            <!-- loop through events from the database and create a timeline entry for each -->
            <?php foreach ($events as $event) : ?>
                <div class="col-6 card mt-4">
                    <div class="card-body">
                        <div class="timeline-entry p-2 mt-4">
                            <div class="timeline-date"><?php echo $event['date']; ?></div><br>
                            <div class="timeline-content ">
                                <h3><?php echo $event['title']; ?></h3><br>
                                <p><?php echo $event['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>