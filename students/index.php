<?php session_start(); ?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:39:32 GMT -->

<head>

    <meta charset="utf-8" />
    <use xlink:href="fa-solid.svg#ad"></use>
    <title>OFAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Add Icons using String format -->
    <font-awesome-icon icon="fa-regular fa-envelope"></font-awesome-icon>

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


        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.php" class="logo logo-dark">
                    <h1 style="color: white;">OFAS</h1>
                </a>
                <!-- Light Logo-->
                <a href="index.php" class="logo logo-light">
                    <h1 style="color: white;">OFAS</h1>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Uploaded Forms</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th data-ordering="false">Form ID</th>
                                                <th data-ordering="false">SR No.</th>
                                                <th data-ordering="false">Student name</th>
                                                <th data-ordering="false">Form type</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "includes/db.php";
                                            $sessionName = $_SESSION['id'];
                                            $sql = "SELECT `FormId`, student_RegNo, NameOfStudent, FormType, `status` from Special_Exam where student_RegNo='$sessionName'";

                                            $result = $conn->query($sql);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $status = $row['status'];
                                                if($status == "approved"){
                                                    $badge = "success";
                                                    $badge_lable = "approved";
                                                } else if( $status == "disapproved"){
                                                    $badge = "danger";
                                                    $badge_lable = "dipproved";
                                                } else{
                                                    $badge = "warning";
                                                    $badge_lable = "pending";
                                                }
                                                echo "<tr>";

                                                echo "<td>";
                                                echo $row['FormId'];
                                                echo "</td>";

                                                echo "<td>";
                                                echo $row['student_RegNo'];
                                                echo "</td>";

                                                echo "<td>";
                                                echo $row['NameOfStudent'];
                                                echo "</td>";

                                                echo "<td>";
                                                echo $row['FormType'];
                                                echo "</td>";

                                                echo "<td>";
                                                echo "<span class = 'badge bg-$badge'>$badge_lable</span>";
                                                echo "</td>";
                                                
                                                echo "</tr>";
                                            }

                                            $sql = "SELECT `FormId`, student_RegNo, NameOfStudent, FormType, `status` from Appeal_Result where student_RegNo='$sessionName'" ;

                                            $result = $conn->query($sql);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $status = $row['status'];
                                                if($status == "approved"){
                                                    $badge = "success";
                                                    $badge_lable = "approved";
                                                } else if( $status == "disapproved"){
                                                    $badge = "danger";
                                                    $badge_lable = "disapproved";
                                                } else{
                                                    $badge = "warning";
                                                    $badge_lable = "pending";
                                                }
                                                echo "<tr>";

                                                echo "<td>";
                                                echo $row['FormId'];
                                                echo "</td>";

                                                echo "<td>";
                                                echo $row['student_RegNo'];
                                                echo "</td>";

                                                echo "<td>";
                                                echo $row['NameOfStudent'];
                                                echo "</td>";

                                                echo "<td>";
                                                echo $row['FormType'];
                                                echo "</td>";

                                                echo "<td>";
                                                echo "<span class = 'badge bg-$badge'>$badge_lable</span>";
                                                echo "</td>";
                                                
                                                echo "</tr>";
                                            }
                                            
                                            $sql = "SELECT * from PostPondExam where student_RegNo='$sessionName'";

                                            $result = $conn->query($sql);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $status = $row['status'];
                                                if($status == "approved"){
                                                    $badge = "success";
                                                    $badge_lable = "approved";
                                                } else if( $status == "disapproved"){
                                                    $badge = "danger";
                                                    $badge_lable = "disapproved";
                                                } else{
                                                    $badge = "warning";
                                                    $badge_lable = "pending";
                                                }
                                                echo "<tr>";

                                                echo "<td>";
                                                echo $row['FormId'];
                                                echo "</td>";

                                                echo "<td>";
                                                echo $row['student_RegNo'];
                                                echo "</td>";

                                                echo "<td>";
                                                echo $row['NameOfStudent'];
                                                echo "</td>";

                                                echo "<td>";
                                                echo $row['FormType'];
                                                echo "</td>";

                                                echo "<td>";
                                                echo "<span class = 'badge bg-$badge'>$badge_lable</span>";
                                                echo "</td>";
                                                
                                                echo "</tr>";
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include "includes/footer.php" ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

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