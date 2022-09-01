
<?php

include './registration/db.php';

session_start();
    
if(!isset($_SESSION["username"])) {
    header("location: ./index.php");
}

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Projects</title>
</head>
<style>
  .col a{
    width: 100px;
    margin: 200px;
  }
</style>
<body>
  
<nav class="navbar bg-light">
  <div class="container-fluid">
    <div class="d-flex">
      <a class="btn btn-outline-success" href="./registration/logout.php">Log out</a>
    </div>
  </div>
</nav>

<div class="container d-flex justify-content-around">
  <div class="row">
    <div class="col">
      <a href="./projects/newproject.php" class="btn btn-primary">New project</a>
    </div>
    <div class="col">
      <a href="./projects/php/read.php" class="btn btn-primary">All projects</a>
    </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>