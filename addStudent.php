<?php
    include 'includes/dbconnect.php';

    session_start();


    if ($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['add'])) {
        $name = $_POST['name'];
        $enroll = $_POST['enrollment'];
        $branch = $_POST['branch'];

        $sql = "INSERT INTO students VALUES('$enroll','$name','$branch',0);";
        $res = mysqli_query($conn,$sql);
        if ($res) {
            header("location:index.php");
        }
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
        <div class='container'>
            <h1 align='center'>Add Students</h1>
        </div>
        <div class="students-table-container w-75 mx-auto my-4">
        <form action="addStudent.php" method="post">
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
                
                
               
                    <tr>
                        <td>
                            <input type="text" name="enrollment" id="enrollment">
                        </td>
                        <td>
                            <input type="text" name="name" id="name">

                        </td>
                        <td>
                            <input type="text" name="branch" id="branch">
                        </td>
                        <td> <input type="submit" name="add" class="btn btn-primary w-100" value="Add"></td>
                    </tr>
              
                
                
            </table>
          
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