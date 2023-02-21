<section class="event-bg">
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
    <div class="container-fluid">
        <div class="row py-4 mb-4">
            <h2 class="text-center text-white">Upcoming Events</h2>
        </div>
        <div class="row justify-content-center event pb-5 g-0">
            <!-- loop through events from the database and create a timeline entry for each -->
            <?php foreach ($events as $event) : ?>
                <div class=" col-sm-12 col-md-8 col-lg-6 m-auto event-entry">
                    <div class="card-body">
                        <div class="event-content text-center m-auto p-4">
                            <h3 class="text-center text-uppercase m-auto"><?php echo $event['title']; ?></h3><br>
                            <h1 class="event-date m-auto" id="event-date" style="font-size: 3rem;"><?php echo $event['date']; ?></h1><br>
                            <p class="text-center m-auto h4"><?php echo $event['description']; ?></p>
                            <img class="img-fluid w-50" src="img/<?php echo $event['img']; ?>">
                            <div class="timer-container">
                                <?php //<div class="leftside-heading">
                                    //Countdown
                                //</div>
                                //<div class="count-down-wrapper">

                                    //<div id="count-down-content">

                                    //</div>
                                //</div>?>
                            </div>
                            <div class="row justify-content-center">
                                <div class=" col-2 text-center py-4 m-auto">
                                    <a href="event-signup.php" class="btn-contact-bg font-weight-bold ">REGISTER</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>