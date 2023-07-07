<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style4.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>CIS Admin Dashboard</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Philippine_Military_Academy_%28PMA%29.svg/1200px-Philippine_Military_Academy_%28PMA%29.svg.png" alt="">
            </div>

            <span class="logo_name">CIS</span>
        </div>

    <div class="side">
        <div class="menu-items">
            <div class="nav-links">
                <a href="/loginv1ghub/user_panel.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a>
            </div>
            
            <div class="nav-links">
                <a class="sub-btn">
                    <i class="uil uil-folder"></i>
                    File Maintenance
                    <i class="uil uil-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <li>
                        <a href="cadet.html" class="link-name">Cadet</a>
                        <a href="/loginv1ghub/file_maintenance/faculty/faculty.php" class="link-name">Faculty</a>
                        <a href="/loginv1ghub/file_maintenance/department/department.php" class="link-name">Department</a>
                        <a href="/loginv1ghub/file_maintenance/course/course.php" class="link-name">Courses</a>
                    </li>
                </div>
            </div>

            <div class="nav-links">
                <a class="sub-btn">
                    <i class="uil uil-process"></i>
                    Initial Term Processing
                    <i class="uil uil-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <div class="nav-links">
                        <a class="sub-btn">
                            <i class="uil uil-gear">
                                Term Settings
                            </i>
                            <i class="uil uil-angle-right dropdown"></i>
                        </a>
                        <div class="sub-menu">
                            <li>
                                <a href="cadet.html" class="link-name">ACAD</a>
                                <a href="faculty.html" class="link-name">Tactics</a>
                                <a href="department.html" class="link-name">Conduct</a>
                                <a href="courses.html" class="link-name">Aptitude</a>
                            </li>
                        </div>
                    </div>
                    <li>
                        <a href="#" class="link-name">Course Offerings</a>
                        <a href="#" class="link-name">Sectioning</a>
                    </li>
                </div>
            </div>

            <div class="nav-links">
                <a class="sub-btn">
                    <i class="uil uil-folder"></i>
                    Term Processing
                    <i class="uil uil-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <li>
                        <a href="faculty.html" class="link-name">ACAD Grades Entry</a>
                        <a href="department.html" class="link-name">Conduct</a>
                        <a href="courses.html" class="link-name">Aptitude</a>
                        <a href="courses.html" class="link-name">SPDO</a>
                        <a href="courses.html" class="link-name">Report</a>
                        <a href="cadet.html" class="link-name">Scheduling</a>
                    </li>
                </div>
            </div>

            <div class="nav-links">
                <a class="sub-btn">
                    <i class="uil uil-folder"></i>
                    Evaluation
                    <i class="uil uil-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <li>
                        <a href="faculty.html" class="link-name">Course</a>
                        <a href="cadet.html" class="link-name">Faculty</a>
                    </li>
                </div>
            </div>

            <div class="nav-links">
                <a class="sub-btn">
                    <i class="uil uil-process"></i>
                    End Term Processing
                    <i class="uil uil-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <a href="#" class="link-name">Reports</a>
                    <div class="nav-links">
                        <a class="sub-btn">
                            <i class="uil uil-gear">
                                Awards
                            </i>
                            <i class="uil uil-angle-right dropdown"></i>
                        </a>
                    
                        <div class="sub-menu">
                            <li>
                                <a href="faculty.html" class="link-name">Comm's List</a>
                                <a href="cadet.html" class="link-name">Dean's List</a>
                            </li>
                        </div>
                        <div class="">
                            <a class="sub-btn">
                                <i class="uil uil-gear">
                                    Graduation Reports
                                </i>
                                <i class="uil uil-angle-right dropdown"></i>
                            </a>
                        
                            <div class="sub-menu">
                                <li>
                                    <a href="faculty.html" class="link-name">Latin Awards</a>
                                    <a href="cadet.html" class="link-name">Awards</a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                
            
            
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
            <div class="norms">
                <div class="loki" onclick="menuToggle();">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVWQTWRsXnQBqP30w3bP2Il7Y9nnybYopPVg&usqp=CAU" width="50" height="50">
                </div>
                    <div class="logout">
                    <!-- Name of the profile
                        <h3>Famous<br><span>Tinapay Enjoyer</span></h3> -->
                    <ul>
                        <li><a href="logout.php">
                            <i class="uil uil-signout">Logout</i></a>
                        </li>
                        <li><a href="#">
                                <i class="uil uil-setting"></i>
                                Settings
                            </a>
                        </li>
                        <li>
                            <i class="uil uil-moon"></i>
                            <span class="link-name">
                                Dark Mode
                            </span>
                            <div class="mode-toggle">
                                <span class="switch"></span>
                            </div>
                        </li>
                    </ul>
                </div>    
            </div>


           

        </div>

        <div class="dash-content">
            <div class="overview">
            
            <div class="container mt-4">
            <div class="activity">
                    

<?php include('message.php'); ?>
<?php include('courseconfig.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Course</span>
                    <a href="course-create.php" class="btn btn-primary float-end">Add Course</a>
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>CCODE</th>
                            <th>CEQUI</th>
                            <th>CNAME</th>
                            <th>CDESC</th>
                            <th>CUNITS</th>
                            <th>CTYPE</th>
                            <th>CADD</th>
                            <th>CADD2</th>
                            <th>CTYPEOLD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM course";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $course)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $course['ccode']; ?></td>
                                        <td><?= $course['cequi']; ?></td>
                                        <td><?= $course['cname']; ?></td>
                                        <td><?= $course['cdesc']; ?></td>
                                        <td><?= $course['cunits']; ?></td>
                                        <td><?= $course['ctype']; ?></td>
                                        <td><?= $course['cadd']; ?></td>
                                        <td><?= $course['cadd2']; ?></td>
                                        <td><?= $course['ctypeold']; ?></td>
                                        <td>
                                            <a href="course-view.php?course_id=<?= $course['course_id']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="course-edit.php?course_id=<?= $course['course_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="course.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_student" value="<?=$course['course_id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> No Record Found </h5>";
                            }
                        ?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>



                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="navbar.js"></script>
    <script src="onclick.js"></script>
</body>
</html>