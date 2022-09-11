<?php 
try{
  require_once ('scripts/db.config.php');

  $msg = '';

  if(isset($_POST['upload'])){
    $image = $_FILES['image']['name'];
    $path = 'gallery/'.$image;

    $sql = $plug->query("INSERT INTO slider (img_path) VALUES ('$path')");

    if($sql){

      move_uploaded_file($_FILES['image']['tmp_name'],$path);

      $msg = '<div class="success">Image Upload Successful !!!</div>';

    }else{
      $msg = '<div class="Warning">Image Upload Failed !</div>';
    }
  }
} 
catch (PDOException $e){
    exit("Error: " . $e->getMessage());
  }
?>

<section class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-lg-8 bg-dark rounded px-4 m-3">
      <h5 for="FormControlFile1" class="text-center text-light">Upload Gallery Image </h5><br>
      <div class="form-group ">
        <h6 class="text-light text-center"><?php echo $msg;?></h6>
      </div>
      <form action="" method="post" enctype="multipart/form-data"  >
        <div class="form-group border border-secondary p-3">
          <input type="file" name="image" class="form-control p-1" required><br>
        </div>
        <div class="form-group justify-content-center">
          <button type="submit" class="btn btn-primary " name="upload">Upload</button>
        </div>
      </form>
    </div>
  </div>
</section>