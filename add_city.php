<!doctype html>
<?php
$con=mysqli_connect("localhost","root","","appointment_portal_db")or die("Database Error....!");
session_start();
    if(isset($_SESSION['admin']))
    {

    }
    else
    {
        echo '
     <script>
       window.location.href="../login.php";
        </script>
        ';
    }
?>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Doctorpro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../Images/logo-6 - Copy.jpg">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/owl.carousel.css">
    <link rel="stylesheet" href="../Admin/css/owl.theme.css">
    <link rel="stylesheet" href="../Admin/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../Admin/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../Admin/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="../Admin/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="../Admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
  <?php
  include('aside.php');
  ?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <?php
    include('top_menu.php');
    ?>
</div>
</div>
</div>
</div>
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="mobile-menu">
<nav id="dropdown">
    <ul class="mobile-menu-nav">
        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul class="collapse dropdown-header-top">
                <li><a href="index.html">Dashboard v.1</a></li>
                <li><a href="index-1.html">Dashboard v.2</a></li>
                <li><a href="index-3.html">Dashboard v.3</a></li>
                <li><a href="analytics.html">Analytics</a></li>
                <li><a href="widgets.html">Widgets</a></li>
            </ul>
        </li>
        <li><a href="events.html">Event</a></li>
        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="demoevent" class="collapse dropdown-header-top">
                <li><a href="all-professors.html">All Professors</a>
                </li>
                <li><a href="add-professor.html">Add Professor</a>
                </li>
                <li><a href="edit-professor.html">Edit Professor</a>
                </li>
                <li><a href="professor-profile.html">Professor Profile</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="demopro" class="collapse dropdown-header-top">
                <li><a href="all-students.html">All Students</a>
                </li>
                <li><a href="add-student.html">Add Student</a>
                </li>
                <li><a href="edit-student.html">Edit Student</a>
                </li>
                <li><a href="student-profile.html">Student Profile</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="democrou" class="collapse dropdown-header-top">
                <li><a href="all-courses.html">All Courses</a>
                </li>
                <li><a href="add-course.html">Add Course</a>
                </li>
                <li><a href="edit-course.html">Edit Course</a>
                </li>
                <li><a href="course-profile.html">Courses Info</a>
                </li>
                <li><a href="course-payment.html">Courses Payment</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="demolibra" class="collapse dropdown-header-top">
                <li><a href="library-assets.html">Library Assets</a>
                </li>
                <li><a href="add-library-assets.html">Add Library Asset</a>
                </li>
                <li><a href="edit-library-assets.html">Edit Library Asset</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="demodepart" class="collapse dropdown-header-top">
                <li><a href="departments.html">Departments List</a>
                </li>
                <li><a href="add-department.html">Add Departments</a>
                </li>
                <li><a href="edit-department.html">Edit Departments</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="demo" class="collapse dropdown-header-top">
                <li><a href="mailbox.html">Inbox</a>
                </li>
                <li><a href="mailbox-view.html">View Mail</a>
                </li>
                <li><a href="mailbox-compose.html">Compose Mail</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                <li><a href="google-map.html">Google Map</a>
                </li>
                <li><a href="data-maps.html">Data Maps</a>
                </li>
                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                </li>
                <li><a href="x-editable.html">X-Editable</a>
                </li>
                <li><a href="code-editor.html">Code Editor</a>
                </li>
                <li><a href="tree-view.html">Tree View</a>
                </li>
                <li><a href="preloader.html">Preloader</a>
                </li>
                <li><a href="images-cropper.html">Images Cropper</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="Chartsmob" class="collapse dropdown-header-top">
                <li><a href="bar-charts.html">Bar Charts</a>
                </li>
                <li><a href="line-charts.html">Line Charts</a>
                </li>
                <li><a href="area-charts.html">Area Charts</a>
                </li>
                <li><a href="rounded-chart.html">Rounded Charts</a>
                </li>
                <li><a href="c3.html">C3 Charts</a>
                </li>
                <li><a href="sparkline.html">Sparkline Charts</a>
                </li>
                <li><a href="peity.html">Peity Charts</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="Tablesmob" class="collapse dropdown-header-top">
                <li><a href="static-table.html">Static Table</a>
                </li>
                <li><a href="data-table.html">Data Table</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="formsmob" class="collapse dropdown-header-top">
                <li><a href="basic-form-element.html">Basic Form Elements</a>
                </li>
                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                </li>
                <li><a href="password-meter.html">Password Meter</a>
                </li>
                <li><a href="multi-upload.html">Multi Upload</a>
                </li>
                <li><a href="tinymc.html">Text Editor</a>
                </li>
                <li><a href="dual-list-box.html">Dual List Box</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                <li><a href="basic-form-element.html">Basic Form Elements</a>
                </li>
                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                </li>
                <li><a href="password-meter.html">Password Meter</a>
                </li>
                <li><a href="multi-upload.html">Multi Upload</a>
                </li>
                <li><a href="tinymc.html">Text Editor</a>
                </li>
                <li><a href="dual-list-box.html">Dual List Box</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="Pagemob" class="collapse dropdown-header-top">
                <li><a href="login.html">Login</a>
                </li>
                <li><a href="register.html">Register</a>
                </li>
                <li><a href="lock.html">Lock</a>
                </li>
                <li><a href="password-recovery.html">Password Recovery</a>
                </li>
                <li><a href="404.html">404 Page</a></li>
                <li><a href="500.html">500 Page</a></li>
            </ul>
        </li>
    </ul>
</nav>
</div>
</div>
</div>
</div>
</div>
<!-- Mobile Menu end -->
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

</div>
</div>
</div>
</div>
</div>

<br>
<br>
<br>
<br>
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                 <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                        <div class="sparkline12-list" style="border-top: 3px solid orange;border-radius: 20px;">
                            <div class="sparkline12-hd" >
                                <div class="main-sparkline12-hd" style="text-align: center;">
                                    <h1>City</h1>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <form action="add_city.php" method="POST">

                                                    

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">City Name</label>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                                <input name="city" type="text" class="form-control" />
                                                             </div>

                                                         </div>
                                                    </div>
                                                    
                                                     <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                        
                                                                        <button class="btn btn-sm btn-primary" type="submit" name="save">Save </button> <button class="btn btn-sm btn-warning" type="submit">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <?php
       include('footer.php');
       ?>
    </div>

    <!-- jquery
		============================================ -->
    <!-- jquery
        ============================================ -->
    <script src="../Admin/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="../Admin/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="../Admin/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="../Admin/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="../Admin/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="../Admin/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="../Admin/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="../Admin/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="../Admin/js/counterup/jquery.counterup.min.js"></script>
    <script src="../Admin/js/counterup/waypoints.min.js"></script>
    <script src="../Admin/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="../Admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../Admin/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="../Admin/js/metisMenu/metisMenu.min.js"></script>
    <script src="../Admin/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="../Admin/js/morrisjs/raphael-min.js"></script>
    <script src="../Admin/js/morrisjs/morris.js"></script>
    <script src="../Admin/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="../Admin/js/sparkline/jquery.sparkline.min.js">Normal/script>
    <script src="../Admin/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="../Admin/js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="../Admin/js/calendar/moment.min.js"></script>
    <script src="../Admin/js/calendar/fullcalendar.min.js"></script>
    <script src="../Admin/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="../Admin/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="../Admin/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="../Admin/js/tawk-chat.js"></script>
</body>

</html>
<?php
if(isset($_POST['save']))
{
    $city=$_POST['city'];
    $dep=$_POST['dep'];
   
    if(mysqli_query($con,"INSERT INTO city VALUES('','".$city."')"))
    {
        echo "
        <script>
        alert('New City Added Successfully');
        window.location.href='add_city.php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
        alert('Try Again');
        window.location.href='add_city.php';
        </script>
        ";
    }
}
?>