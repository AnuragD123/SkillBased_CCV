<?php
    
    include 'includes/dbconnect.php';

    session_start();
        
        $enrollment = $_SESSION['Enrollment'];
        $_SESSION['attendance-marked']=FALSE;
        


    if (isset($_POST['submit'])) {
        
        if (isset($_POST['status']) && !empty($_POST['status'])) {
            
            $status = $_POST['status'];
            
            $sql = "INSERT INTO attendance VALUES('$enrollment','$status',NOW());";
    
            $result = mysqli_query($conn,$sql);
    
         
            
            
            if ($result) {
                if ( $status=='present' ) {
                    $sql2 = "UPDATE students SET attended_sessions=attended_sessions+1 WHERE Enrollment= '$enrollment';";
               
                    
                    
                    $result2 = mysqli_query($conn,$sql2);
                    if ($result2) {
                       
                        $_SESSION['attendance-marked']=TRUE;
                        header("Location:index.php");
                    }
                    
                   
                }
                else {
                    
                    
                    $_SESSION['attendance-marked']=TRUE;
                    header("Location:index.php");
                }
                
                
            }
        }

        else{
            $_SESSION['no-option-selected']=TRUE;
            header("Location:markattendance.php");
        }
    }
    else {
        echo "<b>Access Denied!!</b><br>";
        die();
    }



   
?>