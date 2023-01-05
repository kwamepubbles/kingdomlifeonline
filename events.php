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
            border-radius: 50%;
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
                <div class="timeline-entry">
                    <div class="timeline-date"><?php echo $event['date']; ?></div><br>
                    <div class="timeline-content shadow">
                        <h3><?php echo $event['title']; ?></h3><br>
                        <p><?php echo $event['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>