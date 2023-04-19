<?php
    
    include 'includes/dbconnect.php';

    

    $id = $_GET['ID'];

    $query = "DELETE FROM attendance WHERE `Enrollment` = '$id';";
    $res = mysqli_query($conn,$query);

    if ($res) {
       
        $query = "DELETE FROM students WHERE `Enrollment` = '$id';";
      
    
        $res = mysqli_query($conn,$query);

        if ($res) {
            header("Location:index.php");
            die();
        }
        else {
         echo"no";
        }
    }

   
   




   
