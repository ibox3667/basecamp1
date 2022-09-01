<?php
    include "../../registration/db.php";

    session_start();
        
    if(!isset($_SESSION["username"])) {
        header("location: ./index.php");
    }

    $sql = "SELECT * FROM `projects` ORDER BY id DESC";
    $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .col{
        margin: 20px;
    }
</style>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <div class="d-flex">
            <a class="btn btn-outline-success" href="./registration/logout.php">Log out</a>
            <a class="btn btn-outline-primary" href="../../userpage.php">Home</a>
            </div>
        </div>
    </nav>
    <main id="main">
    <!-- ======= Team Section ======= -->
    <section id="team" class="padd-section text-center">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>All Projects</h2>
          <p class="separator">You can see her all projects</p>
          <?php if(isset($_GET['succes'])){ ?>
                <div class="alert alert-success" role="alert">
                <?php echo ($_GET['succes']); ?>
                </div>
            <?php } ?>
            <?php if (mysqli_num_rows($result)) { ?>
        </div>
        <div class="row">
        <?php
            $i = 0;
            while($rows = mysqli_fetch_assoc($result)){ 
            $i++;
        ?>
            <div class="col card text-center prcard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> <?=$rows['name']?></h5>
                    <p class="card-text"><?=$rows['description']?></p>
                    <a href="./update.php?id=<?=$rows['id']?>" class="btn btn-success">Update</a>
                    <a href="./delete.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        <?php }; ?>
        </div>
      </div>
      <?php }; ?>
    </section><!-- End Team Section -->
    </main><!-- End #main -->
</body>
</html>