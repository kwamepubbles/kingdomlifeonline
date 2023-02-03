<?php
include('components/header.php');
?>
<section>
    <div id="contact" class="section-padding">
        <div class="container-fluid">
            <div class="section-title">
                <div class="row justify-content-center contact-wall">
                    <div class="col-sm-8 col-md-8 col-lg-8 mx-auto">
                        <div class="card-body">
                            <div class="col p-0 mb-3">
                                <div class="col-sm-8 col-md-8 col-lg-8 m-auto">
                                    <img class="d-block w-50 m-auto" src="img/klm-HDlight.png" alt="...">
                                </div>
                                <p class="text-left">
                                    We are a community of believers dedicated to spreading the love and message of Jesus Christ. We strive to create an atmosphere of acceptance, kindness, and support.
                                    Our fellowship acivities include a mix of traditional and contemporary worship, prophetic ministrations as well as expounding of scripture. We also offer a variety of small group Bible studies and prayer partnerships.
                                    If you are new to KINGDOM LIFE, we invite you to come and check us out. Our doors are always open and we would love to have you join us in worship and fellowship.
                                    For more information, please feel free to contact us or visit our social media platforms. We look forward to meeting you and growing in faith together.
                                    <br>
                                    <br>
                                    Blessings,
                                    <br>
                                    Evangelism Team.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="my-4">Get in Touch</h2>
                <div class="row contact-area">
                    <div class="col-lg-8">
                        <div class="contact">
                            <form class="form" name="enq" method="post" action="contact.php" onsubmit="return validation();">
                                <div class="row">
                                    <div class="form-group col-md-6 g-2">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                    <div class="form-group col-md-6 g-2">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                    <div class="form-group col-md-12 g-2">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                                    </div>
                                    <div class="form-group col-md-12 g-2">
                                        <textarea rows="6" name="message" class="form-control" placeholder="Your Message" required="required"></textarea>
                                    </div>
                                    <div class="col-4 justify-content-center my-3 m-auto">
                                        <div class="send-button">
                                            <button type="submit" value="Send message" name="submit" id="submitButton" class="btn-contact-bg" title="Submit Your Message!">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-lg-4 text-center">
                        <div class="single_address">
                            <i class="fa fa-map-marker"></i>
                            <h4>Our Location</h4>
                            <p>University of Ghana, Legon. Accra-GH</p>
                        </div>
                        <div class="single_address">
                            <i class="fa fa-envelope"></i>
                            <h4>Send your message</h4>
                            <p>kingdomlife2233@gmail.com</p>
                        </div>
                        <div class="single_address">
                            <i class="fa fa-phone"></i>
                            <h4>Call us on</h4>
                            <p>(+233) 234 567 88</p>
                        </div>
                        <div class="single_address">
                            <i class="fa-solid fa-clock"></i>
                            <h4>Work Time</h4>
                            <p>Mon - Fri: 08.00 - 16.00. <br>Sat: 10.00 - 14.00</p>
                        </div>
                    </div><!--- END COL -->
                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </div>
    </div>
</section>
<?php
include('components/footer.php');
?>