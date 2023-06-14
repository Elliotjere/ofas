<?php
include "includes/db.php";

if (isset($_POST['special_btn'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $RegNo = $_POST['regNo'];
    $reason = $_POST['reason'];
    $module = $_POST['module'];
    $attachment = $_POST['attachment'];

    $query = "INSERT INTO Special_Exam(NameOfStudent, student_RegNo, course,	module,	reasons, uploaded_file, FormType, Status)
    VALUES ('$name', '$RegNo', '$course', '$module', '$reason', '$attachemt', 'Special Exam', 'pending')";


    if (mysqli_query($conn, $query)) {
        // header("location: student_Special_Exam.php");
        echo "this is good";
        echo "<script>alert('form uploaded succesfully');</script>";
    } else {
        // header("location: index.php");
        echo "bad";
        echo $attachemt;
    }
}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:39:32 GMT -->

<head>

    <meta charset="utf-8" />
    <title>OFAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- HEADER -->
        <?php include "includes/header.php" ?>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="stdDashboard.php" class="logo logo-dark">
                    <h1 style="color: white;">OFAS</h1>
                </a>
                <!-- Light Logo-->
                <a href="stdDashboard.php s" class="logo logo-light">
                    <h1 style="color:#fff;">OFAS</h1>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <?php include "includes/navigation.php" ?>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <form action="" method="post">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">PERSONAL INFORMATION</h4>

                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="live-preview">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Name</label>
                                                    <input type="text" class="form-control" placeholder="" id="firstNameinput" name="name">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">Course</label>
                                                    <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true" name="course">
                                                        <option selected>Choose module...</option>
                                                        <option value="1">IT</option>
                                                        <option value="2">Computer Eng</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="phonenumberInput" class="form-label">Registration Number</label>
                                                    <input type="text" class="form-control" placeholder="" id="" name="regNo">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="ForminputState" class="form-label">Module</label>
                                                    <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true" name="module">
                                                        <option selected>Choose module...</option>
                                                        <option>Project</option>
                                                        <option>Data struture</option>
                                                    </select>
                                                </div>
                                            </div>



                                            <!--end col-->
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">REASONS</h4>

                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <p class="text-muted"></p>
                                        <div class="live-preview">

                                            <div class="row mb-6">
                                                <div class="">
                                                    <label for="meassageInput" class="form-label">Write your reason</label>
                                                    <div class="col-lg-12">
                                                        <textarea class="form-control" id="meassageInput" rows="3" placeholder="Enter your message" name="reason"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">

                                                    <label for="formFile" class="form-label">Attach File</label>
                                                    <input class="form-control" type="file" id="formFile" name="attachment">

                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                        <br>
                                                        <button type="submit" class="btn btn-primary" name="special_btn">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>


            </div>


        </div>
        <div class="d-none code-view">
            <pre class="language-markup" style="height: 375px;">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end row-->
                        </form>

                        
                </div>
                <!-- End Page-content -->

                <?php include "includes/footer.php" ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!--Swiper slider js-->
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:41:03 GMT -->

</html>