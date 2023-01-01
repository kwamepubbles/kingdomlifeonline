<?php
include('../components/header.php');

require_once('../scripts/db.config.php');
?>
<?php
try {

  $msg = '';


  // Check if the form has been submitted
  if (isset($_POST['upload'])) {
    // Get the form data
    $image_path = $_FILES['image']['name'];
    $image_title = $_POST['title'];
    $image_description = $_POST['description'];

    // Move the uploaded file to the target directory
    $target_dir = "gallery/";
    $target_file = $target_dir . basename($image_path);
    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

    // Insert the data into the database
    $stmt = $plug->prepare("INSERT INTO carousel (image_path, image_title, image_description) VALUES (:path, :title, :description)");
    $stmt->bindParam(':path', $image_path);
    $stmt->bindParam(':title', $image_title);
    $stmt->bindParam(':description', $image_description);
    $stmt->execute();

    if ($stmt) {
      $msg = '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Image Upload Successful !!!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    } else {
      $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Image Upload Failed !</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    }
  }
} catch (PDOException $e) {
  exit("Error: " . $e->getMessage());
}
?>

<section class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-lg-4 bg-dark rounded px-4 m-3">
      <h5 class="text-center text-light">Upload Gallery Image </h5><br>
      <div class="form-group ">
        <h6 class="text-light text-center"><?= $msg; ?></h6>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group border border-secondary rounded p-3 pt-3">
          <input type="file" name="image" class="form-control p-1" required><br>
        </div>
        <div class="form-group border border-secondary rounded p-3 pt-3">
          <input type="text" name="title" placeholder=" Title" class="form-control p-1" required><br>
        </div>
        <div class="form-group border border-secondary rounded p-3 pt-3">
          <input type="text" name="description" placeholder=" Discription" class="form-control p-1" required><br>
        </div>
        <div class="form-group row justify-content-center">
          <button type="submit" class="btn-md btn-warning rounded" name="upload">Upload</button>
        </div>
      </form>
    </div>
  </div>
</section>
<?php
include('../components/footer.php');
?>