<?php
include('components/header.php');
?>
<?php
require_once('scripts/db.config.php');
?>
<?php
include('components/carousel.php');
?>

<section>
    <div class="container text-start pt-4">
        <div class="row g-1">
            <div class="col-6">
                <div class="p-2 card border bg-light">

                    <div class="card-body rounded">
                        <img class="img-fluid w-50" src="img/klm-HD.png" alt="...">
                        <p class="text-break">
                        <h6>Welcome to Kingdom Life!</h6> Our mission is to spread the word of God and provide resources and support for those seeking a deeper connection with their faith.

                        On our website, you'll find a variety of resources including daily devotions and sermons. We also have a section dedicated to prayer and to help you connect with God.

                        Our blog features articles written by Christian leaders and members of our community, discussing a wide range of topics such as marriage, parenting, and current events from a biblical perspective.

                        In addition to our online resources, we also host regular events such as Bible studies, worship nights, and retreats. These events provide an opportunity for members of our community to come together and deepen their relationship with God.

                        We believe that faith is a journey and we're here to support you every step of the way. We invite you to explore our website and join our community. Together, we can grow in our understanding and love for God.

                        May God bless you and guide you on your journey. <br>

                        In Christ, <br>
                        [Kingdomlife Team]</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="p-2 border bg-success">
                    <h2 class="font-weight-bold text-center"> Daily Nuggets</h2>
                    <div class="card-body rounded">
                        <h4 class="text-center text-bg-dark">Post title</h4>
                        <p class="text-break">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in semper tellus. Donec a elit vel massa elementum malesuada. Mauris lacus lectus, aliquam quis ultricies ac, pretium in leo. Donec dictum, massa id luctus facilisis, diam est malesuada massa, ac scelerisque arcu tellus at est.

                            Aliquam id neque sed justo faucibus ornare. Duis quis dictum dui. In scelerisque lacus in tortor pellentesque faucibus. Nulla rhoncus facilisis dui, in posuere diam. Nulla a tortor non metus dictum pharetra. Duis euismod, tortor ut rhoncus vehicula, lacus neque pulvinar lectus, et condimentum massa nulla id tortor.

                            Curabitur a condimentum purus, eu viverra nisi. Morbi pellentesque scelerisque tellus, et laoreet nisl mollis in.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-4 overflow-hidden text-center">
        <h2 class="font-weight-bold text-center my-4 ">Sessions & Events</h2>
        <div class="row gx-5 pt-4">
            <div class="col-sm-12 col-md-12 col-lg-4 m-auto">
                <img src="img/sots.jpg" class="d-block w-75 h-auto m-auto p-2" alt="...">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 m-auto">
                <img src="img/sn.jpg" class="img-fluid d-block w-75 h-auto m-auto p-2" alt="...">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 m-auto">
                <img src="img/sn.jpg" class="img-fluid d-block w-75 h-auto m-auto p-2" alt="...">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-4 pb-4">

    </div>
</section>
<?php
include('events.php');
?>
<?php
include('testimonies.php');
?>
<?php
include('components/footer.php');
?>