<?php
    include "../../registration/db.php";

    if(isset($_GET['id'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id = validate($_GET['id']);

        $sql = "DELETE FROM `projects` WHERE id=$id";
        $result = mysqli_query($con, $sql);
        if($result){
            header("Location: read.php?succes=Succesfully deleted");
        }else{
            header("Location: read.php?error=Something went wrong&$user_data");
        }
    }else{
        header("Location: ./read.php");
    }

?>