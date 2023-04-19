<?php
    include 'includes/dbconnect.php';

    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['ID'])) {

        $_SESSION['Enrollment'] = $_GET['ID'];
        $id = $_SESSION['Enrollment'];

        $sql=  "SELECT *  FROM students WHERE `Enrollment`='$id';";
    
    

        
        $result = mysqli_query($conn,$sql);
    }
    else {

        echo "<b>Access Denied!!</b><br>";
        die();
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">







    <title>i-Attendance</title>
</head>
<body>
<header>
        <div class="container">
            <nav class="navbar  fixed-top navbar-expand-lg  navbar-dark bg-light" id="navbar" >
                <div class="container-fluid" >
                    <a class="navbar-brand" href="index.php">i-Attendance</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse pe-5 " id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Students</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="AttendanceDetails.php" tabindex="-1">Attendance Record</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.php" tabindex="-1">About Us</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

    </header>

    <main>

        <div class="students-table-container w-75 mx-auto my-4">
        <form action="save.php" method="post">
            <table class="table table-hover">
                <thead>
                    <tr>
                        
                        <th>Enrollment Number</th>
                        <th>Name</th>
                        <th>Branch</th>
                        <th></th>
                    </tr>
                    <tr>

                    </tr>
                </thead>
                
                <?php 

                    while($fetchedRow = mysqli_fetch_assoc($result)){
                        echo "<tr> ";
                                
                            echo " <td> ". $fetchedRow["Enrollment"]."</td>".
                                "<td>". $fetchedRow['name']. "</td>".
                                "<td>". $fetchedRow['branch']. "</td>";
                            echo '<td>Present: <input type="radio" name="status" value="present" required>
                            Absent:  <input type="radio"  name="status" value="absent">
                            </td>';
                        echo "</tr>" ;

                
                    };
                   
                ?>
                
                
            </table>
            <input class="btn btn-primary d-block w-100"  value = "Save" type="submit" name = "submit" >
            </form>


        </div>
        </div>
    </main>

    <footer>
        <div class="footer">
            <p>&copy;<?php echo(date("Y")); ?> Created By- <b> AnuragDubey, Aman Tiwari, Harsh Kumar Singh, Md. Sarvar Bhatt </b></p>
        </div>
    </footer>
</body>
</html>