<?php 
    include "../../registration/db.php";

    if(isset($_POST['submit'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = validate($_POST['name']);
        $description = validate($_POST['description']);
        
        $user_data = 'name=' .$name. '&description=' .$description;

        if (empty($name)) {
            header("Location: ../newproject.php?error=Name is required&$user_data");
        }else if(empty($description)){
            header("Location: ../newproject.php?error=Description is required&$user_data");
        }else{
            $sql = "INSERT INTO `projects`(`name`, `description`) 
                    VALUES ('$name', '$description')";
            $result = mysqli_query($con, $sql);
            if($result){
                header("Location: ./read.php?succes=Succesfully created");
            }else{
                header("Location: ../newproject.php?error=Something went wrong&$user_data");
            }
        }
    }
?>
