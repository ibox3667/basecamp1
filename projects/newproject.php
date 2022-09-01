<?php

session_start();
    
if(!isset($_SESSION["username"])) {
    header("location: ../index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>New Project</title>
</head>
<body>
    <nav class="navbar bg-light">
    <div class="container-fluid">
        <div class="d-flex">
        <a class="btn btn-outline-success" href="./registration/logout.php">Log out</a>
        </div>
    </div>
    </nav>
    <div class="container">
        <form autocomplete="off" action="./php/create.php" method="POST">
            <h4 class="display-4 text-center">New Project</h4><br><hr>
            <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
                 <?php echo $_GET['error'] ?>
            </div>
               <?php } ?>
            <div class="form-group">
                <label for="name">Name</label><br>
                <input type="text"
                    class="form-control" 
                    id="name" 
                    name="name"  
                    placeholder="Project Name"><br>
            </div>
            <div class="form-group">
                <label for="desc">Description</label><br>
                <input type="text"
                    class="form-control" 
                    id="desc" 
                    name="description"  
                    placeholder="Write a description"><br>
            </div>
            <button type="submit" 
                    name="submit" 
                    class="btn btn-primary"
                    >Create</button>
            <a href="../userpage.php" class="btn btn-danger">Back</a>
        </form>
    </div>
</body>
</html>