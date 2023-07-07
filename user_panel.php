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


    <style>
        .sue {
            padding: 30px 40px;
        }
        .sublink {
            margin-left: 10px;
            list-style-type: none;
            display: none; /* Hide sublinks by default */
        }
        .subbuttonlink {
            margin-left: 20px;
            list-style-type: none;
            display: none; /* Hide subbuttonlinks by default */
        }
        .main-link {
            cursor: pointer; /* Change cursor to pointer on main links */
        }
        .show-sublinks .sublink {
            display: block; /* Show sublinks when the class is present */
        }
        .show-subbuttonlinks .subbuttonlink {
            display: block; /* Show subbuttonlinks when the class is present */
        }
    </style>

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

        <div class="sue">
            <ul>
                <li class="main-link">Dashboard</li>
                <li class="main-link">Main Link 1
                    <ul class="sublink"></li>
                        <li>Sublink 2</li>
                        <li>Sublink 3</li>
                    </ul>
                </li>
                <li class="main-link">Main Link 2
                    <ul class="sublink">
                        <li>Sublink 1
                            <ul class="subbuttonlink">
                                <li>Subbuttonlink 1</li>
                                <li>Subbuttonlink 2</li>
                                <li>Subbuttonlink 3</li>
                            </ul>
                        </li>
                        <li>Sublink 2</li>
                        <li>Sublink 3</li>
                    </ul>
                </li>
            </ul>
                
            
            
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
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                
            </div>
        </div>
    </section>

    <script>
        // JavaScript code to toggle visibility of sublinks and subbuttonlinks
        document.addEventListener('DOMContentLoaded', function() {
            var sublinks = document.querySelectorAll('.sublink');

            // Add click event listener to each sublink
            sublinks.forEach(function(sublink) {
                sublink.addEventListener('click', function(event) {
                    event.stopPropagation(); // Prevent click event from propagating to parent elements

                    // Toggle the class "show-subbuttonlinks" on the clicked sublink
                    this.classList.toggle('show-subbuttonlinks');
                });
            });

            var mainLinks = document.querySelectorAll('.main-link');

            // Add click event listener to each main link
            mainLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    // Toggle the class "show-sublinks" on the clicked main link
                    this.classList.toggle('show-sublinks');

                    // Find the sublink under the clicked main link and toggle its visibility
                    var sublink = this.querySelector('.sublink');
                    if (sublink) {
                        sublink.classList.toggle('show-sublinks');
                    }
                });
            });
        });
    </script>

    <script src="script.js"></script>
    <script src="navbar.js"></script>
    <script src="onclick.js"></script>
</body>
</html>