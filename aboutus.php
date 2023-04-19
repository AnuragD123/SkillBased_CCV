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


<style>
    .our-team{
        margin-top:50px;
        display:block;
        width: fit-content;
        margin:auto;
        text-align: center;
        
    }
</style>




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
                                <a class="nav-link " href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="AttendanceDetails.php" tabindex="-1">Attendance Record</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="aboutus.php" tabindex="-1">About Us</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

    </header>

    <main>
        <div class="container mx-auto w-100">
            <br><br><h1 align="center" class="text-danger">About Us</h1> <br><br>
            <h4 align="center" style="color:teal">i-attendance is an Attendance Management System App that is developed for our <b>Skill Based Mini Project </b> for the subject, Cloud Computing</h4>
            <div class="W-25 our-team"><br><br>
                <h3 class="text-primary">Our Team Members:</h3>
                <p><b>Anurag Dubey (0901CS201027)</b> </p>
                <p><b>Aman Tiwari (0901CS201017)</b></p>
                <p><b>Harsh Kumar Singh (0901CS201036)</b></p>
                <p><b>Md. Sarvar Bhatt (0901CS201039)</b></p>
            </div>
            
           
            <p></p>
        </div>
    </main>
    <footer>
        <div class="footer">
            <p>&copy;<?php echo(date("Y")); ?> Created By- <b> AnuragDubey, Aman Tiwari, Harsh Kumar Singh, Md. Sarvar Bhatt</b></p>
        </div>
    </footer>
</body>
</html>