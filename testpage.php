<style>
.error {color: #FF0000;}
</style>

<?php
// define variables and set to empty values
$messageErr = $fnameErr = $emailErr = '';
$message = $fname = $email = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['message'])) {
    $messageErr = 'Message is required';
  } else {
    $message = test_input($_POST['message']);
  }

  if (empty($_POST['fname'])) {
    $fnameErr = 'Full Name is resquired';
  } else {
    $fname = test_input($_POST['fname']);
  }
  
  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    $email = test_input($_POST['email']);
  }
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class='error'>* required field</span></p>
<form method='post' action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'>  
    Message: <input type='text' name='message'>
    <span class='error'>*<?php echo $messageErr;?></span>
    <br><br>
    Full Name: <input type='text' name='fname'>
    <span class='error'>* <?php echo $fnameErr;?></span>
    <br><br>
    E-mail: <input type='text' name='email'>
    <span class='error'>* <?php echo $emailErr;?></span>
    <br><br>
    <input type='submit' name='submit' value='Submit'>  
</form>

<section class="testimony-wrapper">
    <div class="container text-center shadow">
        <h1> <i class="bi bi-megaphone"></i> TESTIMONIES</h1>
        <i>Your testimony is a source of hope unto others</i>
    </div>
    <div class="container">
        <div class="row d-block">
            <div class="col-lg-12 col-md-12 col-sm-12  comment-scroll justify-content-center">

                <?php

                try {
                    $query = $plug->prepare("SELECT * FROM testimony ORDER BY `id` DESC;");
                    $query->execute();
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as $result) {

                        $fname = $result['fname'];
                        $message = $result['message'];
                        $created_at = date($result['created_at']);
                        $is_admin = $result['is_admin'];

                        if ($is_admin == 1) {
                ?>
                            <div class="text-left mt-0 p-4 m-4 admin">
                                <img src="img/klm-sm-hd.png" class="rounded-circle shadow" width="40" height="40">
                                <h7>Kingdom Life International</h7>
                                <br>
                                <p><?php echo $message; ?></p>
                            </div><br>
                        <?php

                        } else {
                        ?>
                            <div class="text-left p-4 m-10 mt-4  shadow rounded users">
                                <img src="img/user-avatar.jpg" class="rounded-circle" width="40" height="40">
                                <h4><?php echo $fname; ?></h4>
                                <span>- <?php echo $created_at; ?></span>
                                <br>
                                <p><?php echo $message; ?></p>
                            </div><br>
                <?php
                        }
                    }
                } catch (PDOException $e) {
                    exit("Error: " . $e->getMessage());
                }

                ?>
            </div>
            <div class="row">
                <div class="text-center p-4 m-4">
                    <button class=" btn btn-success rounded">
                        <h5>Click <a href="testimony_submit.php">here</a> to submit your testimony.</h5>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

