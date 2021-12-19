<?php
session_start();
include "include/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>

</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><a href="admin.php"><img src="img/gau.png" width="50" height="50"> <span>Admin Panel</span> </h2></a>
        </div>

        <div class="sidebar-menu">

            <ul>
                <li class="">
                    <a href="createadvisor.php" class="active"><span class="las la-user-check"></span><span>Create
                            Advisor</span></a>

                </li>
            </ul>
            <ul>
                <li>
                    <a href="createclass.php" class="active"><span class="las la-project-diagram"></span><span>Create
                            Class</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="faculty.php" class="active"><span
                            class="las la-calendar-check"></span><span>Faculty</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="course.php" class="active"><span
                            class="las la-calendar-check"></span><span>Course</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="classroom.php" class="active"><span
                            class="las la-calendar-check"></span><span>Classroom</span></a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="schedule.php" class="active"><span
                            class="las la-calendar-check"></span><span>Schedule</span></a>
                </li>
            </ul>

        </div>
    </div>



    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"> </span>
                </label>
                DashBoard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>
            <div class="user-wrapper">
                <img src="img/gau.png" width="40px" height="40px" />
                <div>
                    <h3>
                        <?php
                $sql="select * from users where userType='admin'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
                echo $row[1];
                         ?>
                    </h3>

                    <small>
                        <?php
                $sql="select * from users where userType='admin'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
                echo ucwords($row[4]);
                     ?>
                    </small>
                    <div class="navigation">

                        <a class="button" href="logout.php">

                            <h4>
                                <div class="logout">Logout</div>
                            </h4>
                        </a>

                    </div>

        </header>
        <main>

        </main>

        <body>
            faculty
        </body>


    </div>

</body>

</html>