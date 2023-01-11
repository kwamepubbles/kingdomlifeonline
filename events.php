<section>

    <style>
        /* CSS for the timeline */
        #timeline {
            position: relative;
            width: 100%;
            margin: 0 auto;
        }

        .timeline-entry {
            position: relative;
            width: 50%;
            margin: 0 auto;
            text-align: center;
        }

        .timeline-date {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background: #034666;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
        }

        .timeline-content {
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
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
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="shadow">
                    <div class="border p-3">
                        <h4 class="text-center text-bg-dark p-2">Daily Nuggets</h4>
                        <i src="img/megaphone-512.png" alt=""></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in semper tellus. Donec a elit vel massa elementum malesuada. Mauris lacus lectus, aliquam quis ultricies ac, pretium in leo. Donec dictum, massa id luctus facilisis, diam est malesuada massa, ac scelerisque arcu tellus at est. Aliquam id neque sed justo faucibus ornare. Duis quis dictum dui. In scelerisque lacus in tortor pellentesque faucibus. Nulla rhoncus facilisis dui, in posuere diam. Nulla a tortor non metus dictum pharetra. Duis euismod, tortor ut rhoncus vehicula, lacus neque pulvinar lectus, et condimentum massa nulla id tortor. Curabitur a condimentum purus, eu viverra nisi. Morbi pellentesque scelerisque tellus, et laoreet nisl mollis in.</p>
                        <p>
                        <h6>Author:</h6>Sammy</p>
                        <a href="#" class="read-more">Read More</a>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HTML for the timeline container -->
    <div id="timeline" class="container">
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