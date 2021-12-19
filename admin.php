<?php
session_start();
include "include/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>

</head>

<body>

    <input type="checkbox" id ="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><a href="admin.php"><img src="img/gau.png"  width="50" height="50" >  <span>Admin Panel</span> </h2></a>
        </div>

        <div class="sidebar-menu">

            <ul>
                <li class="">
                    <a href="admin.php?accounts" class="active"><span
                            class="las la-user-check"></span><span>Faculty</span></a>

                </li>
            </ul>
            <ul>
                <li>
                    <a href="admin.php?createclass" class="active"><span
                            class="las la-project-diagram"></span><span>Create Class</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="admin.php?timetable" class="active"><span class="las la-calendar-check"></span><span>Subject</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="admin.php?timetable" class="active"><span class="las la-calendar-check"></span><span>Create Advisor</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="admin.php?timetable" class="active"><span class="las la-calendar-check"></span><span>Course</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="admin.php?timetable" class="active"><span class="las la-calendar-check"></span><span>Room</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="admin.php?timetable" class="active"><span class="las la-calendar-check"></span><span>Time</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="admin.php?timetable" class="active"><span class="las la-calendar-check"></span><span>Schedule</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="admin.php?timetable" class="active"><span class="las la-calendar-check"></span><span>List</span></a>
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
                    
                  <h4><div class="logout">Logout</div></h4>
	                        </a>
  
</div>
            
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Total Classes</span>
                    </div>
                    <div>
                        <span class="las la-clipboard"></span>
                    </div>

                </div>
                <div class="card-single">
                    <div>
                        <h1><?php
                        $sql="select userType='advisor', Count(*) from users";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_num_rows($result);
                        echo $row;
                        ?>
                        </h1>
                        <span>Total Advisor</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>

                </div>
                <div class="card-single">
                    <div>
                        <h1>40</h1>
                        <span>Total Lesson</span>
                    </div>
                    <div>
                        <span class="las la-book"></span>
                    </div>

                </div>
                <div class="card-single">
                    <div>
                        <h1>40</h1>
                        <span>Total Faculty</span>
                    </div>
                    <div>
                        <span class="las la-book"></span>
                    </div>
                </div>
            </div>

        </main>



    </div>

</body>

</html>