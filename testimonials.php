<!-- testimony Body -->
<section class="testimony-wrapper">
    <div class="container text-center shadow">
        <p><h1>TESTIMONIES</h1><i>Your testimony is a source of hope to others</i></p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 pb-4 comment-scroll">

                <?php

                    try {
                        $query = $plug->prepare("SELECT * FROM testimony ORDER BY `id` DESC;");
                        $query->execute();
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);

                        foreach($result as $result){
                                
                            $fname = $result['fname'];
                            $message = $result['message'];
                            $created_at = $result['created_at'];
                            $is_admin = $result['is_admin'];

                            if($is_admin == 1 ){
                                ?>
                                    <div class="text-justify mt-4 float-right admin">
                                        <img src="img/klm-sm-hd.png" alt="" class="rounded-circle shadow" width="40" height="40">
                                        <h7>Kingdom Life International</h7>
                                        <br>
                                        <p><?php echo $message;?></p>
                                    </div><br>
                                <?php

                            }
                                else    {
                                            ?>
                                            <div class="comment mt-4 text-left shadow">
                                                <img src="img/user-avatar.jpg" alt="" class="rounded-circle" width="40" height="40">
                                                <h4><?php echo $fname;?></h4>
                                                <span>- <?php echo $created_at;?></span>
                                                <br>
                                                <p><?php echo $message;?></p>
                                            </div><br>
                                            <?php
                                        }
                        }

                    } catch (PDOException $e) {
                        exit("Error: " . $e->getMessage());
                    }

                ?>
            </div>

                             
            <div class="col-lg-5 col-md-5 col-sm-10  float-right">

                <?php 

                    try {
                                
                        if (isset($_POST['submit'])) {
                            $message = htmlspecialchars($_POST['message']);
                            $fname = htmlspecialchars($_POST['fname']);
                            $email = htmlspecialchars($_POST['email']);
                            $checked =htmlspecialchars($_POST['checked']);
                            $query = $plug->prepare("SELECT * FROM testimony WHERE email=:email");
                            $query->bindParam("email", $email, PDO::PARAM_STR);
                            $query->execute();
    
                            if ($query->rowCount() > 0) {
                                echo '<p class="error">The email address is already registered!</p>';
                            }
    
                            if ($query->rowCount() == 0) {
                                $query = $plug->prepare("INSERT INTO testimony (message,fname,email,checked) VALUES (:message,:fname,:email,:checked)");
                                $query->bindParam("message", $message, PDO::PARAM_STR);
                                $query->bindParam("fname", $fname, PDO::PARAM_STR);
                                $query->bindParam("email", $email, PDO::PARAM_STR);
                                $query->bindParam("checked", $checked, PDO::PARAM_STR);
                                $result = $query->execute();
                            }
                        }
                        
                    } catch (PDOException $e) {
                        exit("Error: " . $e->getMessage());
                    }

                ?>

                <form id="algin-form" class="testimony shadow" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                    <div class="form-group">
                        <h4 class="text-center">Share Your Testimony</h4>
                        <label for="message">Message:</label>
                        <textarea name="message" id=""msg cols="30" rows="5" class="form-control text-sentence" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" name="fname" id="fullname" class="form-control text-capitalize" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control text-capitalize" required>
                    </div>
                    <div class="form-inline">
                        <input type="checkbox" name="checked" id="checkbx" value="Yes" class="mr-1">
                        <label>I wish to recieve event notifications via E-mail</label>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="submit" id="post" class="btn">Post <i class="fas fa-comments"></i></button>      
                    </div>
                </form><br>
            </div>
        </div>
    </div>                               
</section>
