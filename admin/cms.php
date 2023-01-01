<?php
require_once('../scripts/db.config.php');
?>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kingdom Life International</title>
    <link rel="icon" href="../img/klm-cl.png">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e786ff1a22.js" crossorigin="anonymous"></script>
    <script src="https://widget.northeurope.cloudapp.azure.com:9443/v0.1.0/mobile-money-widget-mtn.js"></script>
</head>
<header>
    <nav class="navbar navbar-expand-lg shadow mx-background-top-linear fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" rel="nofollow" href="index.php"><img src="../img/klm-HD.png" width="30" height="24" class="d-inline-block align-text-center rounded-circle"></a>
            <p>KINGDOM LIFE</p>
        </div>
    </nav>
</header>

<body>
    <main>
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
                $target_dir = "../gallery/";
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
                    <button type="button" class="btn-close" aria-label="Close"></button>
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                } else {
                    $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Image Upload Failed !</strong>
                    <button type="button" class="btn-close" aria-label="Close"></button>
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
            <div class="row justify-content-center">
                <div class="col-lg bg-light border shadow p-3 m-3">
                    <h2 class="text-center text-light">Upload Gallery Image </h2><br>
                    <div class="form-group ">
                        <h6 class="text-light text-center"><?= $msg; ?></h6>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="col-4">
                            <div class="form-group p-3 ">
                                <input type="file" name="image" class="form-control p-1" required><br>
                            </div>
                            <div class="form-group p-3 ">
                                <input type="text" name="title" placeholder=" Title" class="form-control p-1" required><br>
                            </div>
                            <div class="form-group p-3 ">
                                <input type="text" name="description" placeholder=" Discription" class="form-control p-1" required><br>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-2">
                                    <button type="submit" class="btn btn-outline-success" name="upload">Upload</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <?php
        include('../components/footer.php');
        ?>