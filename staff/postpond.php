<?php 
    include "includes/db.php";
    session_start();

    if(isset($_POST['approve'])){

        $approve_btn = $_POST['approve'];
        $sql = "UPDATE PostPondExam SET status = 'approved' WHERE FormId='$approve_btn' ";

        if(mysqli_query($conn, $sql)){
            echo "good";
        }else{
            echo "bad";
            echo mysqli_error($conn);
        }

    }

    if(isset($_POST['disapprove'])){

        $approve_btn = $_POST['disapprove'];
        $sql = "UPDATE PostPondExam SET status = 'disapproved' WHERE FormId='$approve_btn' ";

        if(mysqli_query($conn, $sql)){
            echo "good";
        }else{
            echo "bad";
            echo mysqli_error($conn);
        }

    }

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/tables-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:43:34 GMT -->

<head>

    <meta charset="utf-8" />
    <title>OFAS - Staffs & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--datatable css-->
    <link rel="stylesheet" href="../../../../cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="../../../../cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="../../../../cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">


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
        <header id="page-topbar">

            <?php include "includes/header.php" ?></header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="stdDashboard.php">
                    OFAS
                </a>
                <!-- Light Logo-->
                <a href="stdDashboard.php">
                    OFAS
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <?php include "includes/navigation.php" ?>
                <!-- Sidebar -->
            </div>
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


                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Postpond Form table</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control search" placeholder="Search...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive table-card mt-3 mb-1">
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Student name</th>
                                                        <th>Registration no#</th>
                                                        <th>Department</th>
                                                        <th>Reason</th>
                                                        <th>Year of postpond</th>
                                                        <th>Semister of Postpond</th>
                                                        <th>course</th>
                                                        <th>status</th>
                                                        <th style="text-align: center;">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody class="list form-check-all">

                                                    <?php
                                                    include "includes/db.php";

                                                    $sql = "select *  from PostPondExam";

                                                    $result = $conn->query($sql);

                                                    while ($row = mysqli_fetch_assoc($result)) {

                                                        $id = $row['FormId'];
                                                        echo "<tr>";
                                                        echo "<form action='' method ='post'>";

                                                        echo "<td>";
                                                        echo $row['NameOfStudent'];
                                                        echo "</td>";

                                                        echo "<td>";
                                                        echo $row['student_RegNo'];
                                                        
                                                        echo "</td>";

                                                        echo "<td>";
                                                        echo $row['department'];
                                                        echo "</td>";

                                                        echo "<td>";
                                                        echo $row['reason'];
                                                        echo "</td>";

                                                        echo "<td>";
                                                        echo $row['yearOfpostpond'];
                                                        echo "</td>";

                                                        echo "<td>";
                                                        echo $row['semisterOfpostpond'];
                                                        echo "</td>";

                                                        echo "<td>";
                                                        echo $row['course'];
                                                        echo "</td>";

                                                        echo "<td>";
                                                        echo $row['status'];
                                                        echo "</td>";

                                                        
                                                        echo"<td>
                                                        <div class='d-flex gap-2'>
                                                            <div class='edit'>
                                                                <button class='btn btn-sm btn-success edit-item-btn' data-bs-toggle='modal' data-bs-target='#showModal'>View</button>
                                                            </div>
                                                            <div class='remove'>
                                                                <button class='btn btn-sm btn-success' data-bs-toggle='modal' data-bs-target='#deleteRecordModal' name='approve' value='$id'>Approve</button>
                                                            </div>
                                                            <div class='remove'>
                                                                <button class='btn btn-sm btn-danger' data-bs-toggle='modal' data-bs-target='#deleteRecordModal' name='disapprove' value='$id'>Disapprove</button>
                                                            </div>
                                                        </div>
                                                    </td>";

                                                    echo "</form>";
                                                    echo "</tr>";

                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled" href="javascrpit:void(0)">
                                                    Previous
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="javascrpit:void(0)">
                                                    Next
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                    </div>

                    <!-- end row -->

                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                <form class="tablelist-form" autocomplete="off">
                                    

                                        <!-- INPUT OF ANY ATTACHMENT SUCH AS PICTURES -->

                                    
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    
                    <!--end modal -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php include "includes/footer.php"?>
        </div>      <!-- end main content-->

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

    <script src="../../../../code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="../../../../cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="../../../../cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="../../../../cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="../../../../cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="../../../../cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="../../../../cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="assets/js/pages/datatables.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/tables-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:43:40 GMT -->

</html>