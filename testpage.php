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
