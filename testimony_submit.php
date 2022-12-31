<?php
include('components/header.php');
?>

<?php
require_once('scripts/db.config.php');
?>

<section class="test_sub">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 m-0 p-3 justify-content-center">

                <?php

                try {
                    $msg = "";
                    if (isset($_POST['submit'])) {
                        $message = htmlspecialchars($_POST['message']);
                        $fname = htmlspecialchars($_POST['fname']);
                        $email = htmlspecialchars($_POST['email']);
                        $checked = htmlspecialchars($_POST['checked']);
                        $query = $plug->prepare("SELECT * FROM testimony WHERE email=:email");
                        $query->bindParam("email", $email, PDO::PARAM_STR);
                        $query->execute();

                        if ($query->rowCount() > 0) {
                            $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">The email address is already registered!</p>';
                        }

                        if ($query->rowCount() == 0) {
                            $query = $plug->prepare("INSERT INTO testimony (message,fname,email,checked) VALUES (:message,:fname,:email,:checked)");
                            $query->bindParam("message", $message, PDO::PARAM_STR);
                            $query->bindParam("fname", $fname, PDO::PARAM_STR);
                            $query->bindParam("email", $email, PDO::PARAM_STR);
                            $query->bindParam("checked", $checked, PDO::PARAM_STR);
                            $result = $query->execute();

                            if ($result) {
                                $msg = '<div class="alert alert-success alert-dismissible fade show" role="alert">Testimony successfully submitted</div>';
                            }
                        }
                    }
                } catch (PDOException $e) {
                    exit("Error: " . $e->getMessage());
                }

                ?>

                <div class="form-group col-md m-3 p-3">
                    <?= $msg; ?>
                </div>
                <h1 class="text-center">TELL YOUR STORY</h1>
                <form class="align-form m-3 p-3 rounded shadow" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="msg" cols="30" rows="5" class="form-control text-sentence" required></textarea>
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
                        <button type="submit" name="submit" id="post" class="btn">Submit <i class="bi bi-send-fill"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include('components/footer.php');
?>